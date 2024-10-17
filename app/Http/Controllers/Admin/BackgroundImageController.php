<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BackgroundImage;
use Illuminate\Http\Request;

class BackgroundImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $backgroundImages = BackgroundImage::all();
        return view('admin.background-images.index', compact('backgroundImages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.background-images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'nullable|integer',
            'alt' => 'nullable|string|max:255',
            'image' => 'required|image|max:2048' // Resim doğrulaması
        ]);

        // BackgroundImage kaydını oluştur
        $backgroundImage = BackgroundImage::create($validated);

        // Resim yüklendiyse medya koleksiyonuna ekle
        if ($request->hasFile('image')) {
            $backgroundImage->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->route('admin.background-images.index')->with('success', 'Background image created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BackgroundImage $backgroundImage)
    {
        return view('admin.background-images.edit', compact('backgroundImage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BackgroundImage $backgroundImage)
    {
        $validated = $request->validate([
            'number' => 'nullable|integer',
            'alt' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048' // Resim doğrulaması
        ]);

        // BackgroundImage kaydını güncelle
        $backgroundImage->update($validated);

        // Eğer yeni bir resim yüklendiyse, eski resmi silip yeni resmi ekle
        if ($request->hasFile('image')) {
            $backgroundImage->clearMediaCollection('images');
            $backgroundImage->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->route('admin.background-images.index')->with('success', 'Background image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BackgroundImage $backgroundImage)
    {
        $backgroundImage->clearMediaCollection('images'); // Resim silme işlemi
        $backgroundImage->delete(); // Kaydı veritabanından sil

        return redirect()->route('admin.background-images.index')->with('success', 'Background image deleted successfully.');
    }
}
