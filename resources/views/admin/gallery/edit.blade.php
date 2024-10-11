@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Image</h1>

        <form action="{{ route('gallery.update', $image->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $image->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ $image->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ $image->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $image->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Upload New Image (Optional)</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <div class="form-group">
                <label>Current Image</label><br>
                <img src="{{ $image->getFirstMediaUrl('gallery_images') }}" alt="{{ $image->title }}" width="150">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
