@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Social Media Link</h1>

        <form action="{{ route('admin.socials.update', $social->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $social->title }}" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $social->name }}" required>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="url" name="link" id="link" class="form-control" value="{{ $social->link }}" required>
            </div>

            <div class="form-group">
                <label for="icon">Icon (e.g., fab fa-facebook)</label>
                <input type="text" name="icon" id="icon" class="form-control" value="{{ $social->icon }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ $social->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $social->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
