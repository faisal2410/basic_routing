<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Welcome to the home page!';
    }

    public function about()
    {
        return 'This is the about page.';
    }

    public function contact()
    {
        return 'Contact us at example@example.com';
    }
}
