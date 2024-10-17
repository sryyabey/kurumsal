@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Company Address</h1>

        <form action="{{ route('admin.company_address.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="district">District</label>
                <input type="text" name="district" id="district" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input type="text" name="postcode" id="postcode" class="form-control">
            </div>

            <div class="form-group">
                <label for="google_map_link">Google Map Link</label>
                <input type="text" name="google_map_link" id="google_map_link" class="form-control">
            </div>

            <div class="form-group">
                <label for="website_link">Website Link</label>
                <input type="text" name="website_link" id="website_link" class="form-control">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
