@extends('layouts.app')

@section('title', 'Book a Consultation | Accurate GST')

@section('content')
<!-- Hero -->
<section class="pt-40 pb-16 md:pt-48 md:pb-20 bg-surface-container-low">
<div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop text-center">
<p class="text-primary font-bold font-label-md text-label-md uppercase tracking-[0.2em] mb-4">Book Consultation</p>
<h1 class="font-headline-lg text-[40px] md:text-display leading-tight text-on-surface">
                Pick a Time That <span class="text-gradient">Works for You</span>
            </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-6">
                Choose a date and time slot below and one of our GST practitioners will confirm your consultation.
            </p>
</div>
</section>

<section class="py-section-gap">
<div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop">
<div class="bg-white rounded-[32px] p-8 md:p-12 card-shadow">

@if (session('booking_success'))
@php($booking = session('booking_success'))
<div class="text-center py-12">
<div class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-4xl">event_available</span>
</div>
<h3 class="font-headline-md text-headline-md mb-2">Booking Requested</h3>
<p class="text-on-surface-variant">Thanks, <span class="font-bold text-on-surface">{{ $booking->full_name }}</span> &mdash; we've noted your request for <span class="font-bold text-on-surface">{{ $booking->preferred_date->format('d M Y') }} at {{ $booking->preferred_time }}</span>. A practitioner will confirm shortly.</p>
</div>
@else
<form action="{{ route('booking.store') }}" method="POST" class="space-y-6">
@csrf

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md font-bold text-on-surface-variant">Full Name</label>
<input name="full_name" value="{{ old('full_name') }}" required type="text" placeholder="John Doe" class="bg-surface-lowest border border-outline-variant rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
@error('full_name') <p class="text-error text-sm">{{ $message }}</p> @enderror
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md font-bold text-on-surface-variant">Business Name</label>
<input name="business_name" value="{{ old('business_name') }}" type="text" placeholder="Acme Corp" class="bg-surface-lowest border border-outline-variant rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
</div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md font-bold text-on-surface-variant">Email Address</label>
<input name="email" value="{{ old('email') }}" required type="email" placeholder="john@company.com" class="bg-surface-lowest border border-outline-variant rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
@error('email') <p class="text-error text-sm">{{ $message }}</p> @enderror
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md font-bold text-on-surface-variant">Mobile Number</label>
<input name="mobile" value="{{ old('mobile') }}" required type="tel" placeholder="+91 00000 00000" class="bg-surface-lowest border border-outline-variant rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
@error('mobile') <p class="text-error text-sm">{{ $message }}</p> @enderror
</div>
</div>

<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md font-bold text-on-surface-variant">Service Required</label>
<select name="service_required" class="bg-surface-lowest border border-outline-variant rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
<option>GST Registration</option>
<option>Monthly Return Filing</option>
<option>Audit &amp; Litigation Support</option>
<option>General Advisory</option>
</select>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md font-bold text-on-surface-variant">Preferred Date</label>
<input name="preferred_date" value="{{ old('preferred_date') }}" required type="date" min="{{ now()->toDateString() }}" class="bg-surface-lowest border border-outline-variant rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
@error('preferred_date') <p class="text-error text-sm">{{ $message }}</p> @enderror
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md font-bold text-on-surface-variant">Preferred Time Slot</label>
<select name="preferred_time" required class="bg-surface-lowest border border-outline-variant rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
<option value="">Select a time</option>
<option>10:00 AM &ndash; 10:30 AM</option>
<option>11:00 AM &ndash; 11:30 AM</option>
<option>12:00 PM &ndash; 12:30 PM</option>
<option>2:00 PM &ndash; 2:30 PM</option>
<option>3:00 PM &ndash; 3:30 PM</option>
<option>4:00 PM &ndash; 4:30 PM</option>
<option>5:00 PM &ndash; 5:30 PM</option>
</select>
@error('preferred_time') <p class="text-error text-sm">{{ $message }}</p> @enderror
</div>
</div>

<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md font-bold text-on-surface-variant">Anything We Should Know? (Optional)</label>
<textarea name="notes" rows="3" class="bg-surface-lowest border border-outline-variant rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">{{ old('notes') }}</textarea>
</div>

<button type="submit" class="w-full bg-primary text-white px-8 py-4 rounded-xl font-label-md text-label-md font-bold hover:shadow-lg hover:-translate-y-0.5 active:scale-95 transition-all">Confirm Booking</button>
<p class="text-label-sm text-center text-on-surface-variant opacity-60">A practitioner will confirm your slot by email within one business day.</p>
</form>
@endif

</div>
</div>
</section>
<!-- Footer -->
@endsection
