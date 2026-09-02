@extends('layouts.app')

@section('title', 'Accurate GST | Expert Tax Compliance & Advisory')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-24 md:pt-48 md:pb-40 overflow-hidden">
<div class="absolute inset-0 z-0 transition-all duration-1000 opacity-100 translate-y-0">

</div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center transition-all duration-1000 opacity-100 translate-y-0">
<div class="space-y-8">
<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-container/10 border border-primary/20 text-primary font-label-md text-label-md">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
</span>
                    Trusted by 2,000+ Enterprises
                </div>
<h1 class="font-display text-[48px] md:text-display leading-tight tracking-tight text-on-surface">
                    GST Compliance <br>
<span class="text-gradient">Made Simple</span> for Growing Businesses
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    Helping businesses stay compliant through expert GST registration, return filing, audit support, litigation assistance, advisory, and end-to-end tax solutions.
                </p>
<div class="flex flex-col sm:flex-row gap-4 pt-4">
<a href="{{ route('booking') }}" class="bg-primary text-white px-8 py-4 rounded-xl font-label-md text-label-md font-bold hover:shadow-lg hover:-translate-y-0.5 active:scale-95 transition-all flex items-center justify-center gap-2">
                        Start Your Filing
                        <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</a>
<a href="{{ route('services') }}" class="bg-white border border-outline-variant text-primary px-8 py-4 rounded-xl font-label-md text-label-md font-bold hover:bg-surface-container-low transition-all flex items-center justify-center gap-2">
                        View All Services
                    </a>
</div>
</div>
<div class="relative group mt-12 lg:mt-0">
<div class="absolute -inset-4 bg-primary/5 rounded-[40px] blur-2xl group-hover:bg-primary/10 transition-colors duration-500"></div>
<div class="relative rounded-[32px] overflow-hidden shadow-2xl border border-white/50 aspect-[4/3]">
<img class="w-full h-full object-cover" data-alt="A professional GST consultant in a high-end corporate office, dressed in a sharp navy suit, reviewing detailed financial spreadsheets and tax reports on multiple sleek monitors. The office environment is modern with clean glass partitions and warm, premium lighting that creates an atmosphere of authority and precision. The aesthetic is sophisticated, using a palette of soft whites and deep blues to reflect corporate stability and expert tax advisory services." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwI6s8x3gcO7oJSxpmmiOoFI1xF23Byd0AdF82XKgbbVIVTiqnXsaIULP3fl5Q9uHyLCQyZxkZhuFJRZdn7bWBhV_rFoD6LSGqkuFFSc3kQQOgbprUpIf9rmf8omPvdUCAlBpJPnzLuIlpUcuWbfNqJ5ttThqb0HTJmGO5uB1Ho5CVZzaZw2gc9wHf8_U8t8rzMA1sfoUD9--9jsn5yEGHDhvzERyaF7U8W8c0uJcnsffFg-tj4vMY">
</div>
<!-- Floating Info Card -->
<div class="absolute -bottom-6 -left-6 bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-xl border border-outline-variant/30 flex items-center gap-4 max-w-xs animate-bounce-slow">
<div class="bg-primary-container/20 p-3 rounded-full text-primary">
<span class="material-symbols-outlined text-3xl" data-icon="verified">verified</span>
</div>
<div>
<p class="font-headline-md text-headline-md text-primary leading-none">100%</p>
<p class="text-label-sm font-label-sm text-on-surface-variant">Compliance Accuracy</p>
</div>
</div>
</div>
</div>
</section>
<!-- Trust Bar Metrics -->
<section class="bg-white py-12 border-y border-outline-variant/20">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop transition-all duration-1000 opacity-100 translate-y-0">
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter text-center">
<div class="space-y-1">
<p class="font-display text-headline-lg text-primary">10+</p>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Years Experience</p>
</div>
<div class="space-y-1">
<p class="font-display text-headline-lg text-primary">5000+</p>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Returns Filed</p>
</div>
<div class="space-y-1">
<p class="font-display text-headline-lg text-primary">2000+</p>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Happy Clients</p>
</div>
<div class="space-y-1">
<p class="font-display text-headline-lg text-primary">24/7</p>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Support Expert</p>
</div>
</div>
</div>
</section>
<!-- Core Services -->
<section class="py-section-gap">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop transition-all duration-1000 opacity-100 translate-y-0">
<div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-16">
<div class="max-w-2xl">
<p class="text-primary font-bold font-label-md text-label-md uppercase tracking-[0.2em] mb-4">Expertise</p>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Our Core Services</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-4">Precision-driven financial strategies to streamline your business operations and ensure absolute regulatory compliance.</p>
</div>
<a class="text-primary font-bold flex items-center gap-2 hover:gap-4 transition-all duration-300" href="{{ route('services') }}">
                    Explore all services
                    <span class="material-symbols-outlined" data-icon="arrow_right_alt">arrow_right_alt</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Registration -->
<div class="bg-white p-base md:p-8 rounded-[24px] card-shadow card-shadow-hover transition-all duration-500 group border border-transparent hover:border-primary-container/20">
<div class="w-16 h-16 bg-surface-container-low rounded-2xl flex items-center justify-center text-primary mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:bg-primary group-hover:text-white">
<span class="material-symbols-outlined text-3xl" data-icon="how_to_reg">how_to_reg</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">GST Registration</h3>
<p class="text-on-surface-variant mb-6">Seamless onboarding for new businesses with rapid ARN generation and documentation support.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-label-md font-label-md">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
                            New Registrations
                        </li>
<li class="flex items-center gap-2 text-label-md font-label-md">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
                            Amendment Services
                        </li>
</ul>
</div>
<!-- Filing -->
<div class="bg-white p-base md:p-8 rounded-[24px] card-shadow card-shadow-hover transition-all duration-500 group border border-transparent hover:border-primary-container/20">
<div class="w-16 h-16 bg-surface-container-low rounded-2xl flex items-center justify-center text-primary mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:bg-primary group-hover:text-white">
<span class="material-symbols-outlined text-3xl" data-icon="description">description</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">Monthly Filing</h3>
<p class="text-on-surface-variant mb-6">Comprehensive return filing (GSTR-1, 3B, 9) with strict adherence to deadlines and data integrity.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-label-md font-label-md">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
                            Zero Error Guarantee
                        </li>
<li class="flex items-center gap-2 text-label-md font-label-md">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
                            ITC Reconciliation
                        </li>
</ul>
</div>
<!-- Audit -->
<div class="bg-white p-base md:p-8 rounded-[24px] card-shadow card-shadow-hover transition-all duration-500 group border border-transparent hover:border-primary-container/20">
<div class="w-16 h-16 bg-surface-container-low rounded-2xl flex items-center justify-center text-primary mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:bg-primary group-hover:text-white">
<span class="material-symbols-outlined text-3xl" data-icon="fact_check">fact_check</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">Audit &amp; Litigation</h3>
<p class="text-on-surface-variant mb-6">Expert representation for audits and legal notices, protecting your business interests with precision.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-2 text-label-md font-label-md">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
                            Department Representation
                        </li>
<li class="flex items-center gap-2 text-label-md font-label-md">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
                            Annual Compliance Audit
                        </li>
</ul>
</div>
</div>
</div>
</section>
<!-- Why Choose Us -->
<section class="py-section-gap bg-surface-container-low overflow-hidden relative">
<div class="absolute top-0 right-0 w-1/3 h-full opacity-5 pointer-events-none transition-all duration-1000 opacity-100 translate-y-0">
<svg fill="none" viewBox="0 0 400 800" xmlns="http://www.w3.org/2000/svg">
<path class="text-primary" d="M400 0L0 800H400V0Z" fill="currentColor"></path>
</svg>
</div>
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10 transition-all duration-1000 opacity-100 translate-y-0">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
<div class="space-y-10">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-6">Why Modern Enterprises Choose Accurate GST</h2>
<p class="font-body-md text-body-md text-on-surface-variant">We don't just file papers; we build financial fortresses for our clients. Our approach combines cutting-edge technology with deep regulatory expertise.</p>
</div>
<div class="space-y-6">
<div class="flex gap-6 p-6 rounded-2xl bg-white shadow-sm border border-outline-variant/30 transition-all hover:border-primary">
<div class="bg-primary/10 text-primary w-12 h-12 shrink-0 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="speed">speed</span>
</div>
<div>
<h4 class="font-headline-md text-body-lg font-bold mb-1">Turnaround in 24 Hours</h4>
<p class="text-on-surface-variant text-sm">Our automated workflows ensure your queries are resolved within a single business day.</p>
</div>
</div>
<div class="flex gap-6 p-6 rounded-2xl bg-white shadow-sm border border-outline-variant/30 transition-all hover:border-primary">
<div class="bg-primary/10 text-primary w-12 h-12 shrink-0 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="security">security</span>
</div>
<div>
<h4 class="font-headline-md text-body-lg font-bold mb-1">100% Secure Data Handling</h4>
<p class="text-on-surface-variant text-sm">Bank-level encryption protects your sensitive financial records and trade secrets.</p>
</div>
</div>
<div class="flex gap-6 p-6 rounded-2xl bg-white shadow-sm border border-outline-variant/30 transition-all hover:border-primary">
<div class="bg-primary/10 text-primary w-12 h-12 shrink-0 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
</div>
<div>
<h4 class="font-headline-md text-body-lg font-bold mb-1">Real-time Dashboard</h4>
<p class="text-on-surface-variant text-sm">Monitor your compliance status and tax liability through our proprietary portal.</p>
</div>
</div>
</div>
</div>
<div class="bg-white rounded-[32px] p-8 md:p-12 shadow-2xl border border-outline-variant/20">
<h3 class="font-headline-md text-headline-md text-center mb-12">The Accurate Advantage</h3>
<div class="space-y-8">
<div class="grid grid-cols-3 text-center border-b border-outline-variant/30 pb-4">
<div class="text-left font-bold text-on-surface-variant">Feature</div>
<div class="font-bold text-on-surface-variant">General Firm</div>
<div class="font-bold text-primary">Accurate GST</div>
</div>
<div class="grid grid-cols-3 text-center items-center py-4 border-b border-outline-variant/10">
<div class="text-left font-medium text-on-surface-variant">Tech-Enabled</div>
<div class="text-error"><span class="material-symbols-outlined" data-icon="close">close</span></div>
<div class="text-primary"><span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span></div>
</div>
<div class="grid grid-cols-3 text-center items-center py-4 border-b border-outline-variant/10">
<div class="text-left font-medium text-on-surface-variant">Error Shield</div>
<div class="text-error"><span class="material-symbols-outlined" data-icon="close">close</span></div>
<div class="text-primary"><span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span></div>
</div>
<div class="grid grid-cols-3 text-center items-center py-4 border-b border-outline-variant/10">
<div class="text-left font-medium text-on-surface-variant">24/7 Support</div>
<div class="text-error"><span class="material-symbols-outlined" data-icon="close">close</span></div>
<div class="text-primary"><span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span></div>
</div>
<div class="grid grid-cols-3 text-center items-center py-4">
<div class="text-left font-medium text-on-surface-variant">Litigation Team</div>
<div class="text-on-surface-variant opacity-30">Limited</div>
<div class="text-primary font-bold">Dedicated</div>
</div>
</div>
<div class="mt-12 text-center">
<a href="{{ route('contact') }}#contact-form" class="inline-block bg-secondary text-white px-10 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all">Switch to Accuracy Today</a>
</div>
</div>
</div>
</div>
</section>
<!-- 4-Step Process Timeline -->
<section id="process-section" class="py-section-gap">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop transition-all duration-1000 opacity-100 translate-y-0">
<div class="text-center max-w-3xl mx-auto mb-20">
<h2 class="font-headline-lg text-headline-lg mb-6">Our Seamless Process</h2>
<p class="text-on-surface-variant">We've refined tax compliance into a high-efficiency 4-step workflow, removing the friction from your business finances.</p>
</div>
<div class="relative">
<!-- Connector Line -->
<div class="hidden md:block absolute top-8 left-0 w-full h-0.5 bg-outline-variant/30 z-0">
<div class="process-line-fill h-full bg-primary relative">
<span class="process-dot absolute -top-[7px] -ml-2 w-4 h-4 rounded-full bg-secondary shadow-md"></span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter relative z-10">
<!-- Step 1 -->
<div class="process-step flex flex-col items-center text-center group">
<div class="process-badge w-16 h-16 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center font-display text-2xl font-bold mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300 shadow-md">1</div>
<h4 class="font-headline-md text-body-lg font-bold mb-3">Consultation</h4>
<p class="text-on-surface-variant text-sm px-4">Expert review of your business structure and tax liabilities.</p>
</div>
<!-- Step 2 -->
<div class="process-step flex flex-col items-center text-center group">
<div class="process-badge w-16 h-16 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center font-display text-2xl font-bold mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300 shadow-md">2</div>
<h4 class="font-headline-md text-body-lg font-bold mb-3">Document Collection</h4>
<p class="text-on-surface-variant text-sm px-4">Secure digital upload of required invoices and permits.</p>
</div>
<!-- Step 3 -->
<div class="process-step flex flex-col items-center text-center group">
<div class="process-badge w-16 h-16 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center font-display text-2xl font-bold mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300 shadow-md">3</div>
<h4 class="font-headline-md text-body-lg font-bold mb-3">Processing</h4>
<p class="text-on-surface-variant text-sm px-4">Precise filing by our certified GST practitioners.</p>
</div>
<!-- Step 4 -->
<div class="process-step flex flex-col items-center text-center group">
<div class="process-badge w-16 h-16 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center font-display text-2xl font-bold mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300 shadow-md">4</div>
<h4 class="font-headline-md text-body-lg font-bold mb-3">Support</h4>
<p class="text-on-surface-variant text-sm px-4">Ongoing advisory and department notice handling.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Footer -->
<!-- Footer -->
@endsection
