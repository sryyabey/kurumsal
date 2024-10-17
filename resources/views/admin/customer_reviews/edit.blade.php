<!-- resources/views/admin/customer_reviews/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Customer Review</h1>

        <form action="{{ route('admin.customer_reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $review->first_name }}" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $review->last_name }}" required>
            </div>

            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" name="profile_image" id="profile_image" class="form-control-file">
                @if($review->profile_image)
                    <div class="mt-2">
                        <img src="{{ $review->profile_image }}" alt="{{ $review->getFullNameAttribute() }}" width="100">
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control" rows="3" required>{{ $review->comment }}</textarea>
            </div>

            <div class="form-group">
                <label for="star">Star Rating</label>
                <select name="star" id="star" class="form-control" required>
                    <option value="1" {{ $review->star == 1 ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $review->star == 2 ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $review->star == 3 ? 'selected' : '' }}>3</option>
                    <option value="4" {{ $review->star == 4 ? 'selected' : '' }}>4</option>
                    <option value="5" {{ $review->star == 5 ? 'selected' : '' }}>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ $review->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $review->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
