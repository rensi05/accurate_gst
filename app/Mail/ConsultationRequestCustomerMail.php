<?php

namespace App\Mail;

use App\Models\ConsultationRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConsultationRequestCustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ConsultationRequest $consultationRequest)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We Received Your Consultation Request | Accurate GST',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.consultation-request-customer',
        );
    }
}
