<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('frontend.home.home');
    }

    public function about() {
        return view('frontend.about.about');
    }

    public function blogSingle() {
        return view('frontend.blog.single-blog');
    }

    public function blog() {
        return view('frontend.blog.blog');
    }

    public function contact() {
        return view('frontend.contact.contact');
    }

    public function portfolio() {
        return view('frontend.portfolio.portfolio');
    }

    public function portfolioDetails() {
        return view('frontend.portfolio.portfolio-details');
    }

    public function services() {
        return view('frontend.services.services');
    }

    public function team() {
        return view('frontend.team.team');
    }
}
