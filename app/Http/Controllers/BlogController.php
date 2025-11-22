<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class BlogController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::with('brand')->latest()->get();
        return view('pages.blog', compact('campaigns'));
    }

    public function show($id)
    {
        $campaign = Campaign::with('brand')->findOrFail($id);

        // Ambil campaign terkait (opsional)
        $relatedCampaigns = Campaign::with('brand')
            ->where('id', '!=', $id)
            ->where('brand_id', $campaign->brand_id) // atau filter lain
            ->limit(2)
            ->get();

        return view('partials.blog.blog-detail', compact('campaign', 'relatedCampaigns'));
    }
}
