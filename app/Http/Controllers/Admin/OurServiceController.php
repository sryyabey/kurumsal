<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    // Index - List all services
    public function index()
    {
        $services = OurService::all();
        return view('admin.our_services.index', compact('services'));
    }

    // Create - Show form to create a new service
    public function create()
    {
        return view('admin.our_services.create');
    }

    // Store - Save new service to database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        OurService::create($request->all());

        return redirect()->route('admin.our_services.index')->with('success', 'Service created successfully.');
    }

    // Show - Display a specific service
    public function show($id)
    {
        $service = OurService::findOrFail($id);
        return view('admin.our_services.show', compact('service'));
    }

    // Edit - Show form to edit a service
    public function edit($id)
    {
        $service = OurService::findOrFail($id);
        return view('admin.our_services.edit', compact('service'));
    }

    // Update - Update service in database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $service = OurService::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('admin.our_services.index')->with('success', 'Service updated successfully.');
    }

    // Destroy - Delete a service
    public function destroy($id)
    {
        $service = OurService::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.our_services.index')->with('success', 'Service deleted successfully.');
    }
}
