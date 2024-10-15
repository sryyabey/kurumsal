<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    // Index - List all gallery images
    public function index()
    {
        $images = GalleryImage::all();
        return view('admin.gallery.index', compact('images'));
    }

    // Create - Show form to create a new image
    public function create()
    {
        return view('admin.gallery.create');
    }

    // Store - Save new image to database
    public function store(Request $request)
    {
        $galleryImage = new GalleryImage();
        $galleryImage->title = $request->input('title');
        $galleryImage->description = $request->input('description');
        $galleryImage->status = $request->input('status');
        $galleryImage->addMedia($request->file('image'))->toMediaCollection('gallery_images');
        $galleryImage->save();

        return redirect()->route('gallery.index');
    }

    // Show - Display a specific image
    public function show($id)
    {
        $image = GalleryImage::findOrFail($id);
        return view('admin.gallery.show', compact('image'));
    }

    // Edit - Show form to edit an image
    public function edit($id)
    {
        $image = GalleryImage::findOrFail($id);
        return view('admin.gallery.edit', compact('image'));
    }

    // Update - Update image in database
    public function update(Request $request, $id)
    {
        $galleryImage = GalleryImage::findOrFail($id);
        $galleryImage->title = $request->input('title');
        $galleryImage->description = $request->input('description');
        $galleryImage->status = $request->input('status');

        if ($request->hasFile('image')) {
            $galleryImage->addMedia($request->file('image'))->toMediaCollection('gallery_images');
        }

        $galleryImage->save();

        return redirect()->route('gallery.index');
    }

    // Destroy - Delete an image
    public function destroy($id)
    {
        $galleryImage = GalleryImage::findOrFail($id);
        $galleryImage->delete();

        return redirect()->route('gallery.index');
    }
}
