<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageCustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ContactMessage $contactMessage)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We Received Your Message | Accurate GST',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-message-customer',
        );
    }
}
