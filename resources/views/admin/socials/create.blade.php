@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Social Media Link</h1>

        <form action="{{ route('admin.socials.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="url" name="link" id="link" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="icon">Icon (e.g., fab fa-facebook)</label>
                <input type="text" name="icon" id="icon" class="form-control" required>
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
