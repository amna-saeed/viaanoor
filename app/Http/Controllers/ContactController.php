<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'website' => 'nullable|string|max:500',
            'message' => 'required|string|max:5000',
        ]);

        $toEmail = config('mail.contact_to', 'admin@viaanur.com');
        $mailSent = false;
        $mailError = null;
        $mailable = new ContactReceived($validated);

        $username = config('mail.mailers.smtp.username');
        $password = config('mail.mailers.smtp.password');
        if (empty($username) || empty($password)) {
            $mailError = 'Set MAIL_USERNAME and MAIL_PASSWORD (One.com) in .env, then php artisan config:clear';
        } else {
            $mailersToTry = ['onecom_send_587', 'onecom_send_465', 'onecom_send_25', 'smtp', 'onecom_mailout_587', 'onecom_mailout_465'];
            foreach ($mailersToTry as $mailerName) {
                try {
                    Mail::mailer($mailerName)->to($toEmail)->send($mailable);
                    $mailSent = true;
                    $mailError = null;
                    break;
                } catch (\Exception $e) {
                    \Log::warning('Contact email failed: ' . $mailerName, ['message' => $e->getMessage()]);
                    $mailError = $e->getMessage();
                }
            }
        }

        $message = $mailSent
            ? 'Your message has been sent successfully. We will get back to you soon.'
            : 'Message received. Email could not be sent (see error below).';

        return response()->json([
            'success' => true,
            'mail_sent' => $mailSent,
            'message' => $message,
            'mail_error' => $mailError,
        ], 200);
    }
}
