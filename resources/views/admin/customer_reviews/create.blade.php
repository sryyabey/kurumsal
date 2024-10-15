<!-- resources/views/admin/customer_reviews/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Customer Review</h1>

        <form action="{{ route('admin.customer_reviews.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" name="profile_image" id="profile_image" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="star">Star Rating</label>
                <select name="star" id="star" class="form-control" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
