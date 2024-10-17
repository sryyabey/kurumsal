<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Index - List all team members
    public function index()
    {

        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    // Create - Show form to create a new team member
    public function create()
    {
        return view('admin.team.create');
    }

    // Store - Save new team member to database
    public function store(Request $request)
    {
        $team = new Team();
        $team->first_name = $request->input('first_name');
        $team->last_name = $request->input('last_name');
        $team->position = $request->input('position');
        $team->description = $request->input('description');
        $team->status = $request->input('status');

        // Spatie Image - Profile image upload
        if ($request->hasFile('profile_image')) {
            $team->addMedia($request->file('profile_image'))->toMediaCollection('profile_images');
        }

        $team->save();

        return redirect()->route('admin.team.index');
    }

    // Show - Display a specific team member
    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.show', compact('team'));
    }

    // Edit - Show form to edit a team member
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    // Update - Update team member in database
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->first_name = $request->input('first_name');
        $team->last_name = $request->input('last_name');
        $team->position = $request->input('position');
        $team->description = $request->input('description');
        $team->status = $request->input('status');

        // Spatie Image - Update profile image
        if ($request->hasFile('profile_image')) {
            $team->clearMediaCollection('profile_images');
            $team->addMedia($request->file('profile_image'))->toMediaCollection('profile_images');
        }

        $team->save();

        return redirect()->route('admin.team.index');
    }

    // Destroy - Delete a team member
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->clearMediaCollection('profile_images');
        $team->delete();

        return redirect()->route('admin.team.index');
    }
}
