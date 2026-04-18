<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ContactSubmission;

class ContactManager extends Component
{
    use WithPagination;

    public $selectedSubmission = null;

    public function selectSubmission($id)
    {
        $this->selectedSubmission = ContactSubmission::find($id);
        
        if ($this->selectedSubmission && !$this->selectedSubmission->is_read) {
            $this->selectedSubmission->update(['is_read' => true]);
        }
    }

    public function deleteSubmission($id)
    {
        ContactSubmission::destroy($id);
        $this->selectedSubmission = null;
        session()->flash('success', 'Submission deleted.');
    }

    public function render()
    {
        return view('livewire.admin.contact-manager', [
            'submissions' => ContactSubmission::latest()->paginate(10),
        ]);
    }
}
