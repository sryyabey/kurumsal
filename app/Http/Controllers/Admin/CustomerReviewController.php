<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerReview;
use Illuminate\Http\Request;

class CustomerReviewController extends Controller
{
    // Index - List all customer reviews
    public function index()
    {
        $reviews = CustomerReview::all();
        return view('admin.customer_reviews.index', compact('reviews'));
    }

    // Create - Show form to create a new customer review
    public function create()
    {
        return view('admin.customer_reviews.create');
    }

    // Store - Save new customer review to database
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'comment' => 'required',
            'star' => 'required|integer|min:1|max:5',
        ]);

        CustomerReview::create($request->all());

        return redirect()->route('admin.customer_reviews.index')->with('success', 'Customer review created successfully.');
    }

    // Show - Display a specific customer review
    public function show($id)
    {
        $review = CustomerReview::findOrFail($id);
        return view('admin.customer_reviews.show', compact('review'));
    }

    // Edit - Show form to edit a customer review
    public function edit($id)
    {
        $review = CustomerReview::findOrFail($id);
        return view('admin.customer_reviews.edit', compact('review'));
    }

    // Update - Update customer review in database
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'comment' => 'required',
            'star' => 'required|integer|min:1|max:5',
        ]);

        $review = CustomerReview::findOrFail($id);
        $review->update($request->all());

        return redirect()->route('admin.customer_reviews.index')->with('success', 'Customer review updated successfully.');
    }

    // Destroy - Delete a customer review
    public function destroy($id)
    {
        $review = CustomerReview::findOrFail($id);
        $review->delete();

        return redirect()->route('admin.customer_reviews.index')->with('success', 'Customer review deleted successfully.');
    }
}
