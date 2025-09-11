<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller
{
    public function create()
    {
        return view('ads.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'location' => 'required',
            'condition' => 'nullable',
            'brand' => 'nullable',
            'delivery_hand' => 'boolean',
            'delivery_shipping' => 'boolean',
            'contact_email' => 'required|email',
            'contact_phone' => 'nullable',
        ]);

        // Create the ad
        $ad = Ad::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'category' => $validated['category'],
            'location' => $validated['location'],
            'condition' => $validated['condition'] ?? null,
            'brand' => $validated['brand'] ?? null,
            'delivery_hand' => $request->has('delivery_hand'),
            'delivery_shipping' => $request->has('delivery_shipping'),
            'contact_email' => $validated['contact_email'],
            'contact_phone' => $validated['contact_phone'] ?? null,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('ads.show', $ad->id)
            ->with('success', 'Votre annonce a été publiée avec succès!');
    }
}