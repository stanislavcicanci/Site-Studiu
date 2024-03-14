<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function Home() {
        return view('home');
    
    }

    public function Shop() {
        return view('shop');
    
    }

    public function Contact() {
        return view('contact');
    
    }

    public function About() {
        return view('about');
    
    }

    public function Login() {
        return view('login');
    
    }

    public function Signup() {
        return view('signup');
    
    }
}
