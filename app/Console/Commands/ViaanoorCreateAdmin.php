<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ViaanoorCreateAdmin extends Command
{
    protected $signature = 'viaanoor:create-admin
                            {email=admin@viaanoor.test : Admin login email}
                            {password=ViaAdmin123! : Admin login password (change after first login)}';

    protected $description = 'Create or reset an LMS admin user (fixes "credentials do not match").';

    public function handle(): int
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        if (strlen($password) < 8) {
            $this->error('Password must be at least 8 characters.');
            return 1;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Administrator',
                'password' => Hash::make($password),
                'role' => User::ROLE_ADMIN,
            ]
        );

        $this->info('Admin user ready.');
        $this->line("  Email:    {$email}");
        $this->line('  Password: (the one you passed to this command)');
        $this->newLine();
        $this->warn('Log in at /login — then change the password if this machine is shared.');

        return 0;
    }
}
