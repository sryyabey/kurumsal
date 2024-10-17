<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    // Index - List all social media entries
    public function index()
    {
        $socials = Social::all();
        return view('admin.socials.index', compact('socials'));
    }

    // Create - Show form to create a new social media entry
    public function create()
    {
        return view('admin.socials.create');
    }

    // Store - Save new social media entry to database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'link' => 'required|url',
            'icon' => 'required',
        ]);

        Social::create($request->all());

        return redirect()->route('admin.socials.index')->with('success', 'Social media link created successfully.');
    }

    // Show - Display a specific social media entry
    public function show($id)
    {
        $social = Social::findOrFail($id);
        return view('admin.socials.show', compact('social'));
    }

    // Edit - Show form to edit a social media entry
    public function edit($id)
    {
        $social = Social::findOrFail($id);
        return view('admin.socials.edit', compact('social'));
    }

    // Update - Update social media entry in database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'link' => 'required|url',
            'icon' => 'required',
        ]);

        $social = Social::findOrFail($id);
        $social->update($request->all());

        return redirect()->route('admin.socials.index')->with('success', 'Social media link updated successfully.');
    }

    // Destroy - Delete a social media entry
    public function destroy($id)
    {
        $social = Social::findOrFail($id);
        $social->delete();

        return redirect()->route('admin.socials.index')->with('success', 'Social media link deleted successfully.');
    }
}
