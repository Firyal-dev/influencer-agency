<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Campaign;

class BrandCampaignController extends Controller
{
    // brand
    public function brand()
    {
        return view('pages.brand-form');
    }

    public function brandStore(Request $request)
    {
        $request->validate([
            'nama_brand' => 'required|string|max:255',
            'deskripsi_brand' => 'required|string|max:255',
            'industri' => 'required|string|max:255',
            'path_img' => 'required|image|max:2048|mimes:jpeg,png,jpg',
        ]);

        // Simpan gambar brand
        $brandImagePath = $request->file('path_img')->store('brand_images', 'public');

        // Simpan data ke session
        session([
            'brand_data' => [
                'nama_brand'       => $request->nama_brand,
                'deskripsi_brand'  => $request->deskripsi_brand,
                'industri'         => $request->industri,
                'path_img'         => $brandImagePath, // simpan path
                'client_id'        => auth('client')->id(),
            ]
        ]);

        return redirect()->route('campaign');
    }

    // campaign
    public function campaign()
    {
        if (!session()->has('brand_data')) {
            return redirect('brand');
        }

        return view('pages.campaign-form');
    }

    public function campaignStore(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'path_img' => 'required|image|max:2048|mimes:jpeg,png,jpg',
        ]);

        $brand = session('brand_data');

        // Upload campaign image
        $campaignImagePath = $request->file('path_img')->store('campaign_images', 'public');

        // Insert BRAND
        $brandData = Brand::create($brand);

        // Insert CAMPAIGN dengan relasi brand_id + client_id
        $campaignData = [
            'brand_id'   => $brandData->id,
            'client_id'  => auth('client')->id(),
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi,
            'path_img'   => $campaignImagePath,
        ];

        Campaign::create($campaignData);

        // Clear session
        session()->forget('brand_data');

        return redirect()->route('home')->with('success', 'Campaign anda berhasil dibuat! Kami akan menghubungi anda segera.');
    }
}