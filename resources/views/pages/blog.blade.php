@extends('layouts.app')

@section('title', 'Blog | Accurate GST')

@section('content')
<!-- Hero -->
<section class="relative pt-40 pb-20 md:pt-48 md:pb-24 overflow-hidden bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center max-w-3xl">
<p class="text-primary font-bold font-label-md text-label-md uppercase tracking-[0.2em] mb-4">Blog</p>
<h1 class="font-headline-lg text-[40px] md:text-display leading-tight text-on-surface">
                GST Updates, <span class="text-gradient">Explained Simply</span>
            </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-6">
                Practical breakdowns of tax notifications, filing deadlines, and compliance strategy &mdash; written for business owners, not just accountants.
            </p>
</div>
</section>

<!-- Category Filter -->
<section class="py-10 border-b border-outline-variant/30">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-wrap gap-3">
<button class="px-5 py-2 rounded-full bg-primary text-white font-label-md text-label-md font-bold">All Posts</button>
<button class="px-5 py-2 rounded-full bg-white border border-outline-variant text-on-surface-variant font-label-md text-label-md font-medium hover:border-primary hover:text-primary transition-colors">Filing &amp; Deadlines</button>
<button class="px-5 py-2 rounded-full bg-white border border-outline-variant text-on-surface-variant font-label-md text-label-md font-medium hover:border-primary hover:text-primary transition-colors">Notifications</button>
<button class="px-5 py-2 rounded-full bg-white border border-outline-variant text-on-surface-variant font-label-md text-label-md font-medium hover:border-primary hover:text-primary transition-colors">Litigation</button>
<button class="px-5 py-2 rounded-full bg-white border border-outline-variant text-on-surface-variant font-label-md text-label-md font-medium hover:border-primary hover:text-primary transition-colors">E-commerce &amp; MSME</button>
</div>
</section>

<!-- Post Grid -->
<section class="py-section-gap">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">

<article class="bg-white rounded-[24px] overflow-hidden card-shadow card-shadow-hover transition-all duration-500">
<div class="h-48 bg-primary/10 flex items-center justify-center text-primary"><span class="material-symbols-outlined text-5xl">campaign</span></div>
<div class="p-6">
<p class="text-primary font-label-md text-label-md font-bold uppercase tracking-wider mb-2">Notifications</p>
<h3 class="font-headline-md text-body-lg font-bold mb-3">GSTR-3B Due Date Extended for Q3 FY26 Filers</h3>
<p class="text-on-surface-variant text-sm mb-4">The CBIC has pushed the filing window by seven days for select states following portal downtime &mdash; here's who qualifies and how to check.</p>
<div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
<span>Aug 24, 2026</span>
<a class="text-primary font-bold" href="#">Read More &rarr;</a>
</div>
</div>
</article>

<article class="bg-white rounded-[24px] overflow-hidden card-shadow card-shadow-hover transition-all duration-500">
<div class="h-48 bg-primary/10 flex items-center justify-center text-primary"><span class="material-symbols-outlined text-5xl">receipt_long</span></div>
<div class="p-6">
<p class="text-primary font-label-md text-label-md font-bold uppercase tracking-wider mb-2">Filing &amp; Deadlines</p>
<h3 class="font-headline-md text-body-lg font-bold mb-3">A Founder's Checklist for GSTR-9 Annual Returns</h3>
<p class="text-on-surface-variant text-sm mb-4">Nine things to reconcile before you file your annual return &mdash; and the three mistakes that trigger the most departmental notices.</p>
<div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
<span>Aug 12, 2026</span>
<a class="text-primary font-bold" href="#">Read More &rarr;</a>
</div>
</div>
</article>

<article class="bg-white rounded-[24px] overflow-hidden card-shadow card-shadow-hover transition-all duration-500">
<div class="h-48 bg-primary/10 flex items-center justify-center text-primary"><span class="material-symbols-outlined text-5xl">gavel</span></div>
<div class="p-6">
<p class="text-primary font-label-md text-label-md font-bold uppercase tracking-wider mb-2">Litigation</p>
<h3 class="font-headline-md text-body-lg font-bold mb-3">Responding to a Show Cause Notice: A Step-by-Step Guide</h3>
<p class="text-on-surface-variant text-sm mb-4">What to gather, what to say, and the timeline you're working against once a Section 73 notice lands in your inbox.</p>
<div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
<span>Jul 30, 2026</span>
<a class="text-primary font-bold" href="#">Read More &rarr;</a>
</div>
</div>
</article>

<article class="bg-white rounded-[24px] overflow-hidden card-shadow card-shadow-hover transition-all duration-500">
<div class="h-48 bg-primary/10 flex items-center justify-center text-primary"><span class="material-symbols-outlined text-5xl">storefront</span></div>
<div class="p-6">
<p class="text-primary font-label-md text-label-md font-bold uppercase tracking-wider mb-2">E-commerce &amp; MSME</p>
<h3 class="font-headline-md text-body-lg font-bold mb-3">GST for Online Sellers: TCS, E-Invoicing &amp; Marketplace Rules</h3>
<p class="text-on-surface-variant text-sm mb-4">A plain-language walkthrough of the compliance obligations unique to sellers on Amazon, Flipkart, and similar marketplaces.</p>
<div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
<span>Jul 18, 2026</span>
<a class="text-primary font-bold" href="#">Read More &rarr;</a>
</div>
</div>
</article>

<article class="bg-white rounded-[24px] overflow-hidden card-shadow card-shadow-hover transition-all duration-500">
<div class="h-48 bg-primary/10 flex items-center justify-center text-primary"><span class="material-symbols-outlined text-5xl">account_balance</span></div>
<div class="p-6">
<p class="text-primary font-label-md text-label-md font-bold uppercase tracking-wider mb-2">Notifications</p>
<h3 class="font-headline-md text-body-lg font-bold mb-3">ITC Reconciliation Rules Get Stricter From October</h3>
<p class="text-on-surface-variant text-sm mb-4">New matching thresholds between GSTR-2B and your purchase register mean tighter vendor follow-up &mdash; here's how to prepare.</p>
<div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
<span>Jul 02, 2026</span>
<a class="text-primary font-bold" href="#">Read More &rarr;</a>
</div>
</div>
</article>

<article class="bg-white rounded-[24px] overflow-hidden card-shadow card-shadow-hover transition-all duration-500">
<div class="h-48 bg-primary/10 flex items-center justify-center text-primary"><span class="material-symbols-outlined text-5xl">how_to_reg</span></div>
<div class="p-6">
<p class="text-primary font-label-md text-label-md font-bold uppercase tracking-wider mb-2">Filing &amp; Deadlines</p>
<h3 class="font-headline-md text-body-lg font-bold mb-3">New Business? Here's Your First 90 Days of GST Compliance</h3>
<p class="text-on-surface-variant text-sm mb-4">From ARN generation to your first return &mdash; a timeline every newly registered business should keep on the wall.</p>
<div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
<span>Jun 20, 2026</span>
<a class="text-primary font-bold" href="#">Read More &rarr;</a>
</div>
</div>
</article>

</div>
<div class="text-center mt-16">
<button class="px-8 py-3 rounded-xl border border-outline-variant text-primary font-bold hover:bg-primary hover:text-white hover:border-primary transition-all">Load More Articles</button>
</div>
</section>

<!-- Newsletter CTA -->
<section class="py-section-gap bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="bg-primary rounded-[32px] p-12 md:p-16 text-center">
<h2 class="font-headline-lg text-headline-lg text-white mb-4">Never Miss a Compliance Deadline</h2>
<p class="text-white/80 font-body-md text-body-md max-w-xl mx-auto mb-8">Get our monthly digest of GST notifications and filing reminders, straight to your inbox.</p>
<form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" data-client-only="true" data-success-target="#newsletter-msg" data-reset-on-success="true">
<input name="email" required type="email" placeholder="Your email address" class="flex-1 px-5 py-3 rounded-xl border-0 focus:ring-2 focus:ring-white outline-none">
<button type="submit" class="bg-white text-primary px-6 py-3 rounded-xl font-label-md text-label-md font-bold hover:shadow-lg transition-all">Subscribe</button>
</form>
<p id="newsletter-msg" class="hidden text-white font-label-md text-label-md mt-4">Thanks &mdash; you're subscribed!</p>
</div>
</div>
</section>

<!-- Footer -->
<!-- Footer -->
@endsection
