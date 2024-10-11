<!-- resources/views/admin/customer_reviews/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer Reviews</h1>

        <a href="{{ route('admin.customer_reviews.create') }}" class="btn btn-primary mb-3">Add New Review</a>

        @if ($reviews->count())
            <table class="table table-bordered table-responsive-sm">
                <thead>
                <tr>
                    <th>Profile Image</th>
                    <th>Name</th>
                    <th>Comment</th>
                    <th>Star Rating</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <td>
                            @if ($review->profile_image)
                                <img src="{{ $review->profile_image }}" alt="{{ $review->getFullNameAttribute() }}" width="50">
                            @else
                                No image
                            @endif
                        </td>
                        <td>{{ $review->getFullNameAttribute() }}</td>
                        <td>{{ Str::limit($review->comment, 50) }}</td>
                        <td>{{ $review->star }}</td>
                        <td>{{ ucfirst($review->status) }}</td>
                        <td>
                            <a href="{{ route('admin.customer_reviews.show', $review->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.customer_reviews.edit', $review->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.customer_reviews.destroy', $review->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No customer reviews found.</p>
        @endif
    </div>
@endsection
