@extends('layouts.app')

@section('title', 'Knowledge Centre | Accurate GST Consulting')

@section('content')
<main class="pt-24">
<!-- Hero Section -->
<section class="relative h-[450px] flex items-center overflow-hidden">

<div class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
<div class="max-w-3xl">
<span class="bg-primary-fixed text-on-primary-fixed px-3 py-1 rounded-full font-label-sm text-label-sm mb-6 inline-block">EXECUTIVE ADVISORY</span>
<h1 class="font-display text-display leading-tight mb-6">Expert Insights for Regulatory <span class="text-primary">Excellence</span></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Your definitive source for tax compliance strategies, legislative updates, and strategic financial planning in the evolving GST landscape.</p>
</div>
</div>
</section>
<!-- Knowledge Categories Grid -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
<div class="max-w-2xl">
<h2 class="font-headline-lg text-headline-lg mb-4">The Article Hub</h2>
<p class="text-on-surface-variant font-body-md">Meticulously researched guides and updates curated by our team of senior tax consultants and legal advisors.</p>
</div>
<div class="flex items-center gap-4">
<div class="relative">
<input class="pl-12 pr-6 py-3 bg-white border border-outline-variant rounded-xl focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all w-full md:w-80 font-label-md" placeholder="Search insights..." type="text">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
</div>
</div>
</div>
<!-- Bento-style Article Grid -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Large Featured Card: Latest GST Updates -->
<div class="md:col-span-8 group article-card relative bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0_12px_32px_rgba(0,0,0,0.08)] transition-all border border-transparent hover:border-primary/20">
<div class="flex flex-col md:flex-row h-full">
<div class="md:w-1/2 overflow-hidden h-64 md:h-auto">
<img class="w-full h-full object-cover card-image transition-transform duration-500" data-alt="A clean, minimalist high-key photo of a modern glass skyscraper reflecting a bright blue sky. The composition is professional and architectural, embodying authority and clarity in a light-mode corporate aesthetic. Soft daylight illuminates the structure with precise lines and high contrast." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlH8efLg6o_o1GOXSjQ-KpS9FJ18YO6Pqaei8dSt3xfdR_gvUrq6llNbZk2yvC3B30Zh8BaTSDB2WwwcaTcC_gbJkcNYcHhpgRqviWLINfEVwbcF9GVUGUWLh6zM7E1oRKiqteLN09UnJ3Xe5RtzJ5-I-7y3WKetiyhWz42QzLHZDSwTIj-MXXEBuZcbGBShpMQqH0mxLYPT0zN8Xnibl53VLiHKzldIdr_3Py9c0TtnrhAkZFd_2P">
</div>
<div class="md:w-1/2 p-8 md:p-10 flex flex-col justify-center">
<div class="flex items-center gap-2 text-primary font-bold font-label-sm text-label-sm mb-4 uppercase tracking-wider">
<span class="material-symbols-outlined text-base">campaign</span>
                                Critical Update
                            </div>
<h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Latest GST Updates: Q4 2024 Compliance Framework</h3>
<p class="text-on-surface-variant mb-8 font-body-md line-clamp-3">Explore the newest amendments in the GST council meeting, including revised tax brackets and automated scrutiny notices.</p>
<a class="inline-flex items-center gap-2 text-primary font-bold group/link" href="#">
                                Read Full Update
                                <span class="material-symbols-outlined group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</div>
<!-- Small Card: Tax Planning Tips -->
<div class="md:col-span-4 group article-card bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0_12px_32px_rgba(0,0,0,0.08)] transition-all border border-transparent hover:border-primary/20 flex flex-col">
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary mb-6 transition-transform group-hover:scale-110">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">insights</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Tax Planning Tips</h3>
<p class="text-on-surface-variant mb-8 flex-grow">Strategic advisory on optimizing your tax liabilities through legal frameworks and timely filings.</p>
<a class="text-primary font-bold inline-flex items-center gap-2 group/link" href="#">
                        Explore Strategy <span class="material-symbols-outlined group-hover/link:translate-x-1 transition-transform">chevron_right</span>
</a>
</div>
<!-- Small Card: Compliance Checklists -->
<div class="md:col-span-4 group article-card bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0_12px_32px_rgba(0,0,0,0.08)] transition-all border border-transparent hover:border-primary/20">
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary mb-6 transition-transform group-hover:scale-110">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">fact_check</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Compliance Checklists</h3>
<p class="text-on-surface-variant mb-6">A step-by-step master list for monthly, quarterly, and annual GST adherence to avoid penalties.</p>
<button class="w-full py-3 px-4 border border-outline-variant rounded-lg font-bold hover:bg-surface-bright transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg">download</span> Download PDF
                    </button>
</div>
<!-- Mid Card: Input Tax Credit Guide -->
<div class="md:col-span-4 group article-card bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0_12px_32px_rgba(0,0,0,0.08)] transition-all border border-transparent hover:border-primary/20">
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary mb-6 transition-transform group-hover:scale-110">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Input Tax Credit Guide</h3>
<p class="text-on-surface-variant mb-8">Maximize your savings by mastering the reconciliation process and claiming eligible ITC accurately.</p>
<a class="text-primary font-bold inline-flex items-center gap-2 group/link" href="#">
                        Learn More <span class="material-symbols-outlined group-hover/link:translate-x-1 transition-transform">chevron_right</span>
</a>
</div>
<!-- Mid Card: E-Invoicing Readiness -->
<div class="md:col-span-4 group article-card bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0_12px_32px_rgba(0,0,0,0.08)] transition-all border border-transparent hover:border-primary/20">
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary mb-6 transition-transform group-hover:scale-110">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">qr_code_2</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">E-Invoicing Readiness</h3>
<p class="text-on-surface-variant mb-8">Prepare your enterprise ERP systems for the mandatory e-invoicing transition with our technical guide.</p>
<a class="text-primary font-bold inline-flex items-center gap-2 group/link" href="#">
                        Technical Setup <span class="material-symbols-outlined group-hover/link:translate-x-1 transition-transform">chevron_right</span>
</a>
</div>
<!-- Full Width CTA: MSME Benefits -->
<div class="md:col-span-12 group relative bg-primary-container text-on-primary-container p-10 md:p-12 rounded-3xl overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">
<div class="relative z-10 max-w-2xl text-center md:text-left">
<h3 class="font-headline-lg text-headline-lg mb-4">MSME Benefits &amp; Support</h3>
<p class="font-body-lg text-body-lg opacity-90 mb-6">Unlock government subsidies, easier credit access, and lower GST compliance burdens specifically designed for Small and Medium Enterprises.</p>
<a href="{{ route('contact') }}" class="inline-block bg-white text-primary px-8 py-3 rounded-xl font-extrabold hover:scale-105 transition-all shadow-lg">Get MSME Advisory</a>
</div>
<div class="relative md:w-1/3">
<span class="material-symbols-outlined text-[160px] opacity-20 absolute -top-20 -right-10 md:static md:opacity-10 md:block md:text-[200px]" style="font-variation-settings: 'FILL' 1;">business_center</span>
</div>
</div>
</div>
</section>
<!-- FAQ Section -->
<section class="py-section-gap bg-surface-container-low px-margin-mobile md:px-margin-desktop">
<div class="max-w-container-max mx-auto">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg mb-4">GST FAQs</h2>
<p class="text-on-surface-variant max-w-xl mx-auto">Get immediate answers to the most frequently asked questions by our executive clients.</p>
</div>
<div class="max-w-4xl mx-auto space-y-4">
<!-- Accordion Item 1 -->
<div class="accordion-item bg-white rounded-xl shadow-sm overflow-hidden transition-all active">
<button class="w-full flex items-center justify-between p-6 md:p-8 text-left focus:outline-none" onclick="toggleAccordion(this)">
<span class="font-headline-md text-headline-md">What are the primary benefits of GST registration for small businesses?</span>
<span class="material-symbols-outlined chevron-icon transition-transform duration-300 text-primary">expand_more</span>
</button>
<div class="accordion-content px-6 md:px-8">
<p class="text-on-surface-variant font-body-md leading-relaxed">GST registration eliminates the cascading effect of tax, allows for seamless input tax credits, and improves competitiveness in the national market by legitimizing your tax identity.</p>
</div>
</div>
<!-- Accordion Item 2 -->
<div class="accordion-item bg-white rounded-xl shadow-sm overflow-hidden transition-all">
<button class="w-full flex items-center justify-between p-6 md:p-8 text-left focus:outline-none" onclick="toggleAccordion(this)">
<span class="font-headline-md text-headline-md">How does the Input Tax Credit (ITC) reconciliation work?</span>
<span class="material-symbols-outlined chevron-icon transition-transform duration-300 text-primary">expand_more</span>
</button>
<div class="accordion-content px-6 md:px-8">
<p class="text-on-surface-variant font-body-md leading-relaxed">ITC reconciliation involves matching the credit claimed in GSTR-3B with the details provided by suppliers in GSTR-2A/2B. Our advisory team helps automate this to ensure zero leakage.</p>
</div>
</div>
<!-- Accordion Item 3 -->
<div class="accordion-item bg-white rounded-xl shadow-sm overflow-hidden transition-all">
<button class="w-full flex items-center justify-between p-6 md:p-8 text-left focus:outline-none" onclick="toggleAccordion(this)">
<span class="font-headline-md text-headline-md">What is the penalty for late filing of GSTR-1?</span>
<span class="material-symbols-outlined chevron-icon transition-transform duration-300 text-primary">expand_more</span>
</button>
<div class="accordion-content px-6 md:px-8">
<p class="text-on-surface-variant font-body-md leading-relaxed">The late fee is typically ₹50 per day of delay (₹20 for nil returns), subject to a maximum cap. Timely filing is crucial to maintain a high GST compliance rating.</p>
</div>
</div>
<!-- Accordion Item 4 -->
<div class="accordion-item bg-white rounded-xl shadow-sm overflow-hidden transition-all">
<button class="w-full flex items-center justify-between p-6 md:p-8 text-left focus:outline-none" onclick="toggleAccordion(this)">
<span class="font-headline-md text-headline-md">Who is eligible for the Composition Scheme?</span>
<span class="material-symbols-outlined chevron-icon transition-transform duration-300 text-primary">expand_more</span>
</button>
<div class="accordion-content px-6 md:px-8">
<p class="text-on-surface-variant font-body-md leading-relaxed">Businesses with a turnover of up to ₹1.5 crore (₹75 lakh for North-Eastern states) can opt for this scheme to pay tax at a fixed rate and reduce compliance formalities.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Newsletter Subscription -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
<div class="bg-surface-container-highest rounded-[3rem] p-12 md:p-20 relative overflow-hidden">
<div class="relative z-10 max-w-2xl mx-auto">
<h2 class="font-headline-lg text-headline-lg mb-6">Stay Ahead of Regulations</h2>
<p class="text-on-surface-variant font-body-lg mb-10">Get the 'Accurate GST' monthly brief delivered directly to your inbox. No spam, just high-priority regulatory intelligence.</p>
<form class="flex flex-col md:flex-row gap-4">
<input name="email" class="flex-grow px-6 py-4 rounded-xl border border-outline-variant bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all font-body-md" placeholder="professional@company.com" required type="email">
<button class="bg-primary text-white px-10 py-4 rounded-xl font-bold hover:bg-primary/90 transition-all shadow-md" type="submit">Subscribe Now</button>
</form>
<p class="mt-6 text-label-sm font-label-sm text-outline">By subscribing, you agree to our Privacy Policy regarding data handling.</p>
</div>
<!-- Abstract visual element -->
<div class="absolute -bottom-10 -right-10 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
<div class="absolute -top-10 -left-10 w-64 h-64 bg-primary-container/10 rounded-full blur-3xl"></div>
</div>
</section>
</main>
<!-- Footer -->
<!-- Footer -->
@endsection
