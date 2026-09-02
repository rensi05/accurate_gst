<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationRequestAdminMail;
use App\Mail\ConsultationRequestCustomerMail;
use App\Http\Requests\StoreConsultationRequestRequest;
use App\Models\ConsultationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ConsultationRequestController extends Controller
{
    public function store(StoreConsultationRequestRequest $request): RedirectResponse
    {
        $consultationRequest = ConsultationRequest::create($request->validated());

        Mail::to(config('services.admin_notification_email'))
            ->send(new ConsultationRequestAdminMail($consultationRequest));

        Mail::to($consultationRequest->email)
            ->send(new ConsultationRequestCustomerMail($consultationRequest));

        return redirect(route('services').'#contact-form')
            ->with('consultation_success', true);
    }
}
