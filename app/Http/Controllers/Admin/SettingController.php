<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasyon kuralları (opsiyonel)
        $request->validate([
            'about_title' => 'nullable|string|max:255',
            'about_description' => 'nullable|string|max:255',
            // diğer alanlar için validasyon kuralları
        ]);

        // Settings tablosunda sadece bir kayıt varsa al, yoksa yeni bir kayıt oluştur.
        $setting = Setting::first();

        if ($setting) {
            // Eğer ayar zaten varsa, mevcut kaydı güncelle.
            $setting->update($request->all());
            $message = 'Setting updated successfully.';
        } else {
            // Eğer ayar yoksa, yeni bir kayıt oluştur.
            Setting::create($request->all());
            $message = 'Setting created successfully.';
        }

        return redirect()->route('admin.settings.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        return view('admin.settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'about_title' => 'nullable|string|max:255',
            // diğer alanlar için validasyon kuralları
        ]);

        $setting->update($request->all());

        return redirect()->route('admin.settings.index')->with('success', 'Setting updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();

        return redirect()->route('admin.settings.index')->with('success', 'Setting deleted successfully.');
    }
}
