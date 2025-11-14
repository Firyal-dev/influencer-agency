<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class HomeController extends Controller
{
    public function index() {
        $campaigns = Campaign::latest()->get();
        return view('pages.hero', compact('campaigns'));
    }
}
