<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = Logo::all();
        return view('admin.logos.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.logos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'nullable|integer',
            'alt' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',  // Resim doğrulaması
        ]);

        // Logo kaydını oluştur
        $logo = Logo::create($validated);

        // Resim yükleme işlemi
        if ($request->hasFile('image')) {
            $logo->addMedia($request->file('image'))->toMediaCollection('logos');
        }

        return redirect()->route('admin.logos.index')->with('success', 'Logo created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        return view('admin.logos.edit', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        $validated = $request->validate([
            'number' => 'nullable|integer',
            'alt' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        // Logo kaydını güncelle
        $logo->update($validated);

        // Eğer yeni bir resim yüklenmişse, eski resmi sil ve yeni resmi ekle
        if ($request->hasFile('image')) {
            $logo->clearMediaCollection('logos');
            $logo->addMedia($request->file('image'))->toMediaCollection('logos');
        }

        return redirect()->route('admin.logos.index')->with('success', 'Logo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        $logo->clearMediaCollection('logos'); // İlgili resmi sil
        $logo->delete(); // Kayıt silme

        return redirect()->route('admin.logos.index')->with('success', 'Logo deleted successfully.');
    }
}
