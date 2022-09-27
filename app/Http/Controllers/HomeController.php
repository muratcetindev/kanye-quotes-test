<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getQuotes()
    {
        $quotes = [];
        for ($i = 0; $i < 5; $i++) {
            array_push($quotes, $this->getSingleQuote());
        }
        return $quotes;
    }
    public function getSingleQuote()
    {
        $response = Http::get('https://api.kanye.rest/text');
        return $response->body();
    }
}
