<?php

namespace App\Http\Controllers;

use App\Mail\BookingAdminMail;
use App\Mail\BookingCustomerMail;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function create(): View
    {
        return view('pages.booking');
    }

    public function store(StoreBookingRequest $request): RedirectResponse
    {
        $booking = Booking::create($request->validated());

        Mail::to(config('services.admin_notification_email'))
            ->send(new BookingAdminMail($booking));

        Mail::to($booking->email)
            ->send(new BookingCustomerMail($booking));

        return redirect()
            ->route('booking')
            ->with('booking_success', $booking);
    }
}
