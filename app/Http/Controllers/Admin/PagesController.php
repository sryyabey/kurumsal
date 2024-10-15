<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'show_in_menu' => 'boolean',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Resimler için doğrulama
        ]);


        $page = Page::create([
            'user_id' => auth()->id(),
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['title']),
            'content' => $validatedData['content'],
            'meta_title' => $validatedData['meta_title'],
            'meta_description' => $validatedData['meta_description'],
            'meta_keywords' => $validatedData['meta_keywords'],
            'show_in_menu' => $validatedData['show_in_menu'] ?? false,
        ]);

        // Resimler Yüklenirse Ekle
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $page->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->route('pages.index')->with('success', 'Sayfa başarıyla oluşturuldu!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'show_in_menu' => 'boolean',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Resimler
        ]);

        $page->update([
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['title']),
            'content' => $validatedData['content'],
            'meta_title' => $validatedData['meta_title'],
            'meta_description' => $validatedData['meta_description'],
            'meta_keywords' => $validatedData['meta_keywords'],
            'show_in_menu' => $validatedData['show_in_menu'] ?? false,
        ]);

        // Eğer yeni resimler eklenmişse eski resimleri sil ve yeni resimleri ekle
        if ($request->hasFile('images')) {
            $page->clearMediaCollection('images'); // Önceki resimleri temizle
            foreach ($request->file('images') as $image) {
                $page->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->route('pages.index')->with('success', 'Sayfa başarıyla güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->clearMediaCollection('images'); // Sayfaya bağlı tüm resimleri sil
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Sayfa başarıyla silindi!');
    }
}
