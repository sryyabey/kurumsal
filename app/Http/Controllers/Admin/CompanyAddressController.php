<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyAddress;
use Illuminate\Http\Request;

class CompanyAddressController extends Controller
{
    // Index - List all company addresses
    public function index()
    {
        $addresses = CompanyAddress::all();
        return view('admin.company_address.index', compact('addresses'));
    }

    // Create - Show form to create a new company address
    public function create()
    {
        return view('admin.company_address.create');
    }

    // Store - Save new company address to database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        CompanyAddress::create($request->all());

        return redirect()->route('admin.company_address.index')->with('success', 'Company address created successfully.');
    }

    // Show - Display a specific company address
    public function show($id)
    {
        $address = CompanyAddress::findOrFail($id);
        return view('admin.company_address.show', compact('address'));
    }

    // Edit - Show form to edit a company address
    public function edit($id)
    {
        $address = CompanyAddress::findOrFail($id);
        return view('admin.company_address.edit', compact('address'));
    }

    // Update - Update company address in database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        $address = CompanyAddress::findOrFail($id);
        $address->update($request->all());

        return redirect()->route('admin.company_address.index')->with('success', 'Company address updated successfully.');
    }

    // Destroy - Delete a company address
    public function destroy($id)
    {
        $address = CompanyAddress::findOrFail($id);
        $address->delete();

        return redirect()->route('admin.company_address.index')->with('success', 'Company address deleted successfully.');
    }
}
