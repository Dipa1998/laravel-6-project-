<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
     /**
     * Get the Quote home page view
     */
    public function index()
    {
        return view('quotes.index');
    }
    public function show()
    {
        return view('quotes.show');
    }
}
