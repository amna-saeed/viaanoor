<?php

/**
 * Emails listed in ADMIN_EMAILS (.env) always get the admin role on each request
 * until they are admin (fixes "stuck on student dashboard").
 *
 * Example .env:
 * ADMIN_EMAILS=you@gmail.com,owner@viaanoor.test
 */
$raw = env('ADMIN_EMAILS', env('ADMIN_EMAIL', ''));

return [
    'admin_emails' => array_values(array_filter(array_map(function ($e) {
        return strtolower(trim($e));
    }, explode(',', (string) $raw)))),

    /**
     * When true: every logged-in user is admin; student routes redirect away.
     */
    'admin_only_mode' => filter_var(env('ADMIN_ONLY_MODE', false), FILTER_VALIDATE_BOOLEAN),

    /**
     * When true, registration form may create admin accounts. Keep false in production.
     */
    'allow_admin_registration' => filter_var(env('ALLOW_ADMIN_REGISTRATION', false), FILTER_VALIDATE_BOOLEAN),

    /**
     * Used by AdminUserSeeder: set ADMIN_SEED_PASSWORD in .env, then run php artisan db:seed --class=AdminUserSeeder
     */
    'admin_seed_email' => env('ADMIN_SEED_EMAIL', 'admin@viaanoor.test'),
    'admin_seed_name' => env('ADMIN_SEED_NAME', 'Administrator'),
    'admin_seed_password' => env('ADMIN_SEED_PASSWORD', ''),

    /**
     * When true, /setup-admin-account shows a one-time form to create admin (no register needed).
     * Set false after creating admin. Never true on public production.
     */
    'allow_web_admin_setup' => filter_var(env('ALLOW_WEB_ADMIN_SETUP', false), FILTER_VALIDATE_BOOLEAN),
];
