<?php

namespace App\Console\Commands;

use App\Models\Application;
use App\Mail\ApplicationReceived;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestApplicationMail extends Command
{
    protected $signature = 'mail:test-application {to=admin@viaanur.com}';
    protected $description = 'Send a test application email to check SMTP (e.g. php artisan mail:test-application)';

    public function handle()
    {
        $to = $this->argument('to');
        $this->info("Sending test application email to: {$to}");

        $application = new Application([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '+44 7500 000000',
            'course' => 'gcse-maths',
        ]);
        $application->id = 0;

        try {
            Mail::to($to)->send(new ApplicationReceived($application));
            $this->info('Email sent successfully. Check inbox (and Spam).');
            return 0;
        } catch (\Exception $e) {
            $this->error('Mail failed: ' . $e->getMessage());
            return 1;
        }
    }
}
