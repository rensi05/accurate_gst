<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageAdminMail;
use App\Mail\ContactMessageCustomerMail;
use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        $contactMessage = ContactMessage::create($request->validated());

        Mail::to(config('services.admin_notification_email'))
            ->send(new ContactMessageAdminMail($contactMessage));

        Mail::to($contactMessage->email)
            ->send(new ContactMessageCustomerMail($contactMessage));

        return redirect(route('contact').'#contact-form')
            ->with('contact_success', true);
    }
}
