@extends('layouts.app')

@section('title', 'Contact Us | Accurate GST')

@section('content')
<!-- Hero -->
<section class="relative pt-40 pb-16 md:pt-48 md:pb-20 overflow-hidden bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center max-w-3xl">
<p class="text-primary font-bold font-label-md text-label-md uppercase tracking-[0.2em] mb-4">Contact Us</p>
<h1 class="font-headline-lg text-[40px] md:text-display leading-tight text-on-surface">
                Let's Talk <span class="text-gradient">Compliance</span>
            </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-6">
                Have a filing deadline, a departmental notice, or just a question about GST registration? Reach out &mdash; a practitioner responds within one business day.
            </p>
</div>
</section>

<!-- Contact Info Cards -->
<section class="py-16">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="bg-white p-8 rounded-[24px] card-shadow text-center">
<div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-6 mx-auto">
<span class="material-symbols-outlined text-3xl">mail</span>
</div>
<h3 class="font-headline-md text-body-lg font-bold mb-2">Email Us</h3>
<a href="mailto:info@accuratetaxbiz.com" class="text-on-surface-variant hover:text-primary transition-colors">info@accuratetaxbiz.com</a>
</div>
<div class="bg-white p-8 rounded-[24px] card-shadow text-center">
<div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-6 mx-auto">
<span class="material-symbols-outlined text-3xl">phone_in_talk</span>
</div>
<h3 class="font-headline-md text-body-lg font-bold mb-2">Call Us</h3>
<a href="tel:+919376377778" class="text-on-surface-variant hover:text-primary transition-colors">+91 93763 77778</a>
</div>
<div class="bg-white p-8 rounded-[24px] card-shadow text-center">
<div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-6 mx-auto">
<span class="material-symbols-outlined text-3xl">location_on</span>
</div>
<h3 class="font-headline-md text-body-lg font-bold mb-2">Visit Us</h3>
<p class="text-on-surface-variant">Rajkot, Gujarat, India</p>
</div>
</div>
</section>

<!-- Form + Map -->
<section id="contact-form" class="py-section-gap">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-gutter items-start">

<div class="bg-white rounded-[32px] p-8 md:p-12 card-shadow">
<h2 class="font-headline-lg text-headline-md text-on-surface mb-2">Send Us a Message</h2>
<p class="text-on-surface-variant mb-8">Fill out the form and our team will get back to you within one business day.</p>
<form id="contactForm" class="space-y-5" data-client-only="true" data-fields-target="#form-fields" data-success-target="#form-success" data-reset-on-success="true">
<div id="form-fields" class="space-y-5">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
<div>
<label class="block text-label-md font-label-md font-bold text-on-surface-variant mb-2">Full Name</label>
<input name="full_name" required type="text" class="w-full px-4 py-3 rounded-xl border border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
</div>
<div>
<label class="block text-label-md font-label-md font-bold text-on-surface-variant mb-2">Phone Number</label>
<input name="phone" required type="tel" class="w-full px-4 py-3 rounded-xl border border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
</div>
</div>
<div>
<label class="block text-label-md font-label-md font-bold text-on-surface-variant mb-2">Email Address</label>
<input name="email" required type="email" class="w-full px-4 py-3 rounded-xl border border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
</div>
<div>
<label class="block text-label-md font-label-md font-bold text-on-surface-variant mb-2">I'm Interested In</label>
<select name="subject" class="w-full px-4 py-3 rounded-xl border border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
<option>GST Registration</option>
<option>Monthly Return Filing</option>
<option>Audit &amp; Litigation Support</option>
<option>General Advisory</option>
</select>
</div>
<div>
<label class="block text-label-md font-label-md font-bold text-on-surface-variant mb-2">Message</label>
<textarea name="message" required rows="4" class="w-full px-4 py-3 rounded-xl border border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"></textarea>
</div>
<button type="submit" class="w-full bg-primary text-white px-8 py-4 rounded-xl font-label-md text-label-md font-bold hover:shadow-lg hover:-translate-y-0.5 active:scale-95 transition-all">Send Message</button>
</div>
<div id="form-success" class="hidden text-center py-12">
<div class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-4xl">check_circle</span>
</div>
<h3 class="font-headline-md text-body-lg font-bold mb-2">Message Sent</h3>
<p class="text-on-surface-variant">Thanks for reaching out &mdash; a practitioner will contact you within one business day.</p>
</div>
</form>
</div>

<div class="space-y-6">
<div class="rounded-[32px] overflow-hidden card-shadow aspect-[4/3] bg-surface-container-low flex flex-col items-center justify-center text-on-surface-variant border border-outline-variant/30">
<span class="material-symbols-outlined text-6xl text-primary mb-4">map</span>
<p class="font-label-md text-label-md font-bold">Rajkot, Gujarat, India</p>
<p class="text-sm">Map preview unavailable in this mockup</p>
</div>
<div class="bg-white rounded-[24px] p-8 card-shadow">
<h3 class="font-headline-md text-body-lg font-bold mb-4">Office Hours</h3>
<div class="space-y-3 text-on-surface-variant">
<div class="flex justify-between"><span>Monday &ndash; Friday</span><span class="font-bold text-on-surface">9:00 AM &ndash; 7:00 PM</span></div>
<div class="flex justify-between"><span>Saturday</span><span class="font-bold text-on-surface">10:00 AM &ndash; 4:00 PM</span></div>
<div class="flex justify-between"><span>Sunday</span><span class="font-bold text-on-surface">Closed</span></div>
</div>
<div class="mt-6 pt-6 border-t border-outline-variant/30 flex items-center gap-3 text-primary">
<span class="material-symbols-outlined">support_agent</span>
<span class="font-label-md text-label-md font-bold">24/7 Emergency Notice Support Available</span>
</div>
</div>
</div>

</div>
</section>

<!-- Footer -->
<!-- Footer -->
@endsection
