<?php
namespace App\Livewire\Admin;

use App\Models\User;
use App\Services\AuditLogger;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class UserManager extends Component
{
    use WithPagination;

    public $search = '';
    public $userId = null;
    public $username = '';
    public $email = '';
    public $role = User::ROLE_VIEW_ONLY;
    public $password = '';
    
    public $isModalOpen = false;
    public $isEditMode = false;

    protected $rules = [
        'username' => 'required|min:3|unique:users,username',
        'email' => 'required|email|unique:users,email',
        'role' => 'required|in:super-admin,view-only-admin',
        'password' => 'required|min:8',
    ];

    protected $listeners = ['refreshUsers' => '$refresh'];

    public function openModal()
    {
        $this->resetForm();
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function resetForm()
    {
        $this->userId = null;
        $this->username = '';
        $this->email = '';
        $this->role = User::ROLE_VIEW_ONLY;
        $this->password = '';
        $this->isEditMode = false;
        $this->resetErrorBag();
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        $this->userId = $user->id;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->isEditMode = true;
        $this->isModalOpen = true;
    }

    public function saveUser()
    {
        if ($this->isEditMode) {
            $this->validate([
                'username' => 'required|min:3|unique:users,username,' . $this->userId,
                'email' => 'required|email|unique:users,email,' . $this->userId,
                'role' => 'required|in:super-admin,view-only-admin',
                'password' => 'nullable|min:8',
            ]);

            $user = User::findOrFail($this->userId);
            $user->update([
                'username' => $this->username,
                'email' => $this->email,
                'role' => $this->role,
            ]);

            if ($this->password) {
                $user->update(['password' => Hash::make($this->password)]);
            }

            AuditLogger::log('user_updated', "Updated administrative user: {$this->username} ({$this->role})");
            session()->flash('success', "Account for '{$this->username}' updated.");
        } else {
            $this->validate();

            User::create([
                'username' => $this->username,
                'email' => $this->email,
                'role' => $this->role,
                'password' => Hash::make($this->password),
                'name' => $this->username, // Default name to username
            ]);

            AuditLogger::log('user_created', "Created new administrative user: {$this->username} ({$this->role})");
            session()->flash('success', "New account for '{$this->username}' established.");
        }

        $this->closeModal();
    }

    public function deleteUser($id)
    {
        if ($id === auth()->id()) {
            session()->flash('error', "Security Protocol: You cannot terminate your own active session.");
            return;
        }

        $user = User::findOrFail($id);
        $username = $user->username;
        $user->delete();

        AuditLogger::log('user_deleted', "Terminated administrative user: {$username}");
        session()->flash('success', "Account for '{$username}' has been purged from the registry.");
    }

    public function render()
    {
        $users = User::where('username', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('livewire.admin.user-manager', [
            'users' => $users
        ])->layout('layouts.admin');
    }
}
