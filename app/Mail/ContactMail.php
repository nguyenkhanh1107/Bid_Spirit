<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Tạo một instance mới.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Xây dựng email.
     */
    public function build()
    {
        return $this->subject('New Contact Form Submission')
                    ->view('emails.contact')
                    ->with('data', $this->data);
    }
}
