<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class BlogController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::with('brand')
            ->where('status', 'aktif')
            ->latest()
            ->get();

        return view('pages.blog', compact('campaigns'));
    }

    public function show($id)
    {
        $campaign = Campaign::with('brand')
            ->where('status', 'aktif')
            ->findOrFail($id);

        return view('partials.blog.blog-detail', compact('campaign'));
    }
}
