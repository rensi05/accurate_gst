@extends('layouts.app')

@section('title', 'Services - Accurate GST | Professional Tax Advisory')

@section('content')
<main class="pt-32 pb-section-gap">
<!-- Hero Section -->
<header class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-16 text-center lg:text-left">
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8">
<div class="max-w-2xl">
<span class="text-primary font-bold tracking-widest uppercase text-label-sm mb-4 block">Expert Solutions</span>
<h1 class="font-display text-headline-lg-mobile md:text-display text-on-surface mb-6 leading-tight">Our Comprehensive GST Ecosystem</h1>
<p class="font-body-lg text-on-surface-variant opacity-80">Navigate the complexities of Indian taxation with precision-engineered services designed for modern enterprises and startups.</p>
<a href="{{ route('contact') }}" class="inline-flex items-center gap-2 mt-6 bg-primary text-white px-8 py-4 rounded-xl font-label-md text-label-md font-bold hover:shadow-lg hover:-translate-y-0.5 transition-all">
                    Get Custom Quote
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
</div>
<div class="hidden lg:block pb-4">
<div class="flex -space-x-4">
<div class="w-12 h-12 rounded-full border-4 border-surface-lowest bg-surface-container" data-alt="A professional headshot of a senior male tax consultant in a navy blue suit, smiling warmly, studio lighting with a neutral gray background." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBDdw4tLtPB8vH4d2XKioCdKB9KUjX_6iTonzNruRqb_ysr-5C60VgJiIda1CWEzC9kHp2JTiUT-CNR1WBomgA4Pxzl-ycw7T_SUzaP6e7p4ryLNHo68pzGcvCBgVUzwq7PIwKGzWOJHxJHIB3zqUMz14jrNzAZrf5GmQ9hXJIlKo3Jc5Ripj8wKcaDf2I7dajbupkSJVWtUuUIQMHuukp7EIVZO8C8HdOH2VrusmJwLqKuhR4Qk4sh')"></div>
<div class="w-12 h-12 rounded-full border-4 border-surface-lowest bg-surface-container" data-alt="A professional headshot of a middle-aged female financial advisor with glasses, wearing a white blazer, bright corporate office lighting." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAvA-YH0wBx7voxOkrhVJCyxjCFk4Ebg-13F0nkzVCPZL88n06BrudqCL2aWOb5cSZ5k4GEHdqH-8l160qAJv0GAK7b-QptvDk-rvSHoKlQDeN9u0kxf8yEsg8NxB2JNWUq0LZpb0ee7V72giqYwkUvKInEBn7b-JEPDEyi6rQNE_OGqs6dWhewX2WRpMm1YOUJQyfbr4YWsnvLKkahbiaJZ2fjer9XHiUb8aFTRG9tCJn82e3tAStI')"></div>
<div class="w-12 h-12 rounded-full border-4 border-surface-lowest bg-surface-container" data-alt="A professional headshot of a young male auditor in a charcoal business shirt, focused expression, modern minimalist interior background." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBZz9vh7k2mScwZ8ZrcQkz2IIEBOWh-ExeRDHDpruRmj4Ci54ntMC8ZwZAcHlzZlAqQ5czMAUwpyb1MM1pYRQzZoBwkrnu7tICE6Bdc-j58R7un7ym5jWU9IY2DMqk_B-QCgJFlmgFz71iYbZmJTnvslRz3MXJAYdyBtGih9j3qW6cvZs2h59ZDtxvcWN8UJr3gyxejElrccP9fm9y3gsHsEtrbDB9chXuwjHBIzaz85nprf9eNPvlG')"></div>
<div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-surface-lowest bg-primary-container text-on-primary-container font-bold text-xs">+12</div>
</div>
<p class="text-label-sm mt-2 text-on-surface-variant font-medium">Trusted by 100+ Businesses</p>
</div>
</div>
</header>
<!-- Services Grid -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
<!-- GST Registration -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="app_registration">app_registration</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">GST Registration</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">End-to-end guidance for fresh GST registration, amendments, and cancellation for all business types.</p>
</div>
</div>
<!-- Return Filing -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="description">description</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Return Filing</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Timely and accurate filing of GSTR-1, GSTR-3B, and other periodic returns to avoid penalties.</p>
</div>
</div>
<!-- Audit -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="fact_check">fact_check</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Audit</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Comprehensive internal and statutory GST audits to ensure 100% compliance with legal frameworks.</p>
</div>
</div>
<!-- Annual Return -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="calendar_today">calendar_today</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Annual Return</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Specialized filing of GSTR-9 and GSTR-9C reconciliation statements for absolute financial peace of mind.</p>
</div>
</div>
<!-- Advisory -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="gavel">gavel</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Advisory</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Strategic tax planning, transaction structuring, and legal opinions on complex GST provisions.</p>
</div>
</div>
<!-- Notices -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-secondary/5 rounded-lg flex items-center justify-center text-secondary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="warning">warning</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Notices</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Expert drafting and representation for SCN responses and communication with tax authorities.</p>
</div>
</div>
<!-- Litigation -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="balance">balance</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Litigation</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Strong representation before appellate authorities and tribunals for dispute resolution.</p>
</div>
</div>
<!-- Refund -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="payments">payments</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Refund</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Expedited processing of GST refunds for exporters, inverted duty structures, and excess balance.</p>
</div>
</div>
<!-- Compliance -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="verified_user">verified_user</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Compliance</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Managed compliance services to ensure your business remains updated with every law change.</p>
</div>
</div>
<!-- Accounting & Bookkeeping -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="account_balance">account_balance</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">Accounting</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Professional bookkeeping services integrated with GST-compliant accounting software.</p>
</div>
</div>
<!-- E-Invoicing -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="qr_code_2">qr_code_2</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">E-Invoicing</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Seamless implementation and automation of E-Invoicing as per the GST portal requirements.</p>
</div>
</div>
<!-- E-Way Bill -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="local_shipping">local_shipping</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">E-Way Bill</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Hassle-free generation and management of E-Way bills for inter-state movement of goods.</p>
</div>
</div>
<!-- MSME Advisory -->
<div class="service-card group bg-surface-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-container flex flex-col justify-between xl:col-span-1">
<div>
<div class="icon-container w-14 h-14 bg-primary/5 rounded-lg flex items-center justify-center text-primary mb-6 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl" data-icon="business_center">business_center</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface">MSME Advisory</h3>
<p class="text-on-surface-variant font-body-md mb-6 line-clamp-3">Specialized tax and compliance support for small and medium enterprises to scale efficiently.</p>
</div>
</div>
</div>
</section>
<!-- Lead Generation Form -->
<section id="contact-form" class="mt-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="bg-surface-lowest rounded-2xl overflow-hidden shadow-xl flex flex-col lg:flex-row border border-outline-variant/30">
<div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center bg-primary text-on-primary relative overflow-hidden">
<!-- Subtle background pattern or shader could go here -->
<div class="relative z-10">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-6">Ready to streamline your GST compliance?</h2>
<p class="font-body-lg opacity-90 mb-8 max-w-md">Join hundreds of businesses that trust Accurate GST for their tax health. Get a 30-minute free discovery session with our senior consultants.</p>
<div class="space-y-4">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined bg-on-primary/10 p-2 rounded-full">call</span>
<span class="font-semibold">+91 93763 77778</span>
</div>
<div class="flex items-center gap-4">
<span class="material-symbols-outlined bg-on-primary/10 p-2 rounded-full">mail</span>
<span class="font-semibold">info@accuratetaxbiz.com</span>
</div>
</div>
</div>
<!-- Decorative element -->
<div class="absolute -right-20 -bottom-20 w-64 h-64 bg-primary-container rounded-full opacity-20 blur-3xl"></div>
</div>
<div class="lg:w-1/2 p-10 lg:p-16">
<h3 class="font-headline-md text-headline-md mb-8 text-on-surface">Request Free Consultation</h3>
@if (session('consultation_success'))
<div class="mb-6 p-4 rounded-lg bg-primary/10 text-primary font-bold flex items-center gap-2">
<span class="material-symbols-outlined">check_circle</span>
Request sent! Our team will contact you shortly.
</div>
@endif
<form action="{{ route('consultation-request.store') }}" method="POST" class="space-y-6">
@csrf
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-on-surface-variant">Full Name</label>
<input name="full_name" value="{{ old('full_name') }}" class="bg-surface-lowest border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-primary-container focus:border-primary transition-all" placeholder="John Doe" required type="text">
@error('full_name') <p class="text-error text-sm">{{ $message }}</p> @enderror
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-on-surface-variant">Business Name</label>
<input name="business_name" value="{{ old('business_name') }}" class="bg-surface-lowest border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-primary-container focus:border-primary transition-all" placeholder="Acme Corp" type="text">
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-on-surface-variant">Email Address</label>
<input name="email" value="{{ old('email') }}" class="bg-surface-lowest border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-primary-container focus:border-primary transition-all" placeholder="john@company.com" required type="email">
@error('email') <p class="text-error text-sm">{{ $message }}</p> @enderror
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-on-surface-variant">Mobile Number</label>
<input name="mobile" value="{{ old('mobile') }}" class="bg-surface-lowest border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-primary-container focus:border-primary transition-all" placeholder="+91 00000 00000" required type="tel">
@error('mobile') <p class="text-error text-sm">{{ $message }}</p> @enderror
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-on-surface-variant">Service Required</label>
<select name="service_required" class="bg-surface-lowest border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-primary-container focus:border-primary transition-all">
<option>GST Registration</option>
<option>Return Filing</option>
<option>Audit &amp; Assurance</option>
<option>Litigation Support</option>
<option>Others</option>
</select>
</div>
<button class="w-full bg-secondary-container text-on-secondary-container font-bold py-4 rounded-lg shadow-lg hover:bg-secondary transition-all active:scale-[0.98]" type="submit">Submit Request</button>
<p class="text-label-sm text-center text-on-surface-variant opacity-60">We typically respond within 2-4 business hours.</p>
</form>
</div>
</div>
</section>
</main>
<!-- Footer -->
<!-- Footer -->
@endsection
