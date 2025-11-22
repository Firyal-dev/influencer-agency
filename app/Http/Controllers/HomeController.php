<?php

namespace App\Http\Controllers;

use App\Models\Campaign;

class HomeController extends Controller
{
    public function index() {
        $campaigns = Campaign::latest()->get();
        $client = auth()->guard('client')->user();

        return view('pages.home', compact('campaigns', 'client'));
    }
}
