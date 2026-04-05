<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Creates or updates one admin user from .env (ADMIN_SEED_EMAIL, ADMIN_SEED_PASSWORD).
     * Run: php artisan db:seed --class=AdminUserSeeder
     */
    public function run()
    {
        $password = config('viaanoor.admin_seed_password');
        if ($password === null || $password === '') {
            $this->command->warn('Skipped: set ADMIN_SEED_PASSWORD in .env then run again.');
            return;
        }

        $email = config('viaanoor.admin_seed_email');
        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => config('viaanoor.admin_seed_name'),
                'password' => Hash::make($password),
                'role' => User::ROLE_ADMIN,
            ]
        );

        $this->command->info("Admin ready: {$email} (password from ADMIN_SEED_PASSWORD in .env)");
    }
}
