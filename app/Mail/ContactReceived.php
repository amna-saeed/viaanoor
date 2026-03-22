<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $website;
    public $contactMessage;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->website = $data['website'] ?? null;
        $this->contactMessage = $data['message'];
    }

    public function build()
    {
        return $this->subject('Contact form: ' . $this->name)
            ->replyTo($this->email)
            ->view('emails.contact-received');
    }
}
