<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\AdminAccountCreated;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SetupIdentity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:setup-identity';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bootstrap the database identity system with initial admin accounts';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting identity synchronization...');

        $accounts = [
            [
                'username' => 'admin-tmp',
                'name' => 'Tempo Account',
                'email' => 'thabang.mposula@outlook.com',
                'role' => User::ROLE_SUPER_ADMIN,
            ],
            [
                'username' => 'admin-ems',
                'name' => 'EMS Monitor',
                'email' => 'thabang.mposula@outlook.com',
                'role' => User::ROLE_VIEW_ONLY,
            ],
        ];

        foreach ($accounts as $data) {
            $user = User::where('username', $data['username'])->first();

            if ($user) {
                $this->warn("User {$data['username']} already exists. Skipping creation.");
                continue;
            }

            // Generate secure random password
            $password = Str::random(12);

            $user = User::create([
                'name' => $data['name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($password),
                'role' => $data['role'],
            ]);

            $this->info("Created {$user->role}: {$user->username}");

            // Send notification
            try {
                Mail::to($data['email'])->send(new AdminAccountCreated([
                    'username' => $user->username,
                    'password' => $password,
                    'role' => $user->role,
                ]));
                $this->info("Credentials sent to {$data['email']}");
            } catch (\Exception $e) {
                $this->error("Failed to send email to {$data['email']}: " . $e->getMessage());
                $this->warn("Credentials for {$user->username}: {$password}");
            }
        }

        $this->info('Identity synchronization complete.');
    }
}
