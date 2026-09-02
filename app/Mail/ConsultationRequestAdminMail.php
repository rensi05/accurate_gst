<?php

namespace App\Mail;

use App\Models\ConsultationRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConsultationRequestAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ConsultationRequest $consultationRequest)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Consultation Request: '.$this->consultationRequest->full_name,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.consultation-request-admin',
        );
    }
}
