<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function industries(): View
    {
        return view('pages.industries');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function knowledgeCentre(): View
    {
        return view('pages.knowledge-centre');
    }

    public function blog(): View
    {
        return view('pages.blog');
    }

    public function privacyPolicy(): View
    {
        return view('pages.privacy-policy');
    }

    public function termsOfService(): View
    {
        return view('pages.terms-of-service');
    }

    public function cookiePolicy(): View
    {
        return view('pages.cookie-policy');
    }
}
