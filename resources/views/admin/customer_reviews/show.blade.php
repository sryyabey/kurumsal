<!-- resources/views/admin/customer_reviews/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer Review Details</h1>

        <div class="mb-3">
            <strong>Full Name:</strong>
            <p>{{ $review->getFullNameAttribute() }}</p>
        </div>

        <div class="mb-3">
            <strong>Profile Image:</strong>
            <p>
                @if($review->profile_image)
                    <img src="{{ $review->profile_image }}" alt="{{ $review->getFullNameAttribute() }}" width="100">
                @else
                    No image available
                @endif
            </p>
        </div>

        <div class="mb-3">
            <strong>Comment:</strong>
            <p>{{ $review->comment }}</p>
        </div>

        <div class="mb-3">
            <strong>Star Rating:</strong>
            <p>{{ $review->star }}</p>
        </div>

        <div class="mb-3">
            <strong>Status:</strong>
            <p>{{ ucfirst($review->status) }}</p>
        </div>

        <a href="{{ route('admin.customer_reviews.index') }}" class="btn btn-secondary">Back to Reviews List</a>
    </div>
@endsection
