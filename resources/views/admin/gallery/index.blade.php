
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gallery Images</h1>

        <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-3">Add New Image</a>

        @if ($images->count())
            <table class="table table-bordered table-responsive-sm">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{ $image->title }}</td>
                        <td>{{ Str::limit($image->description,50) }}</td>
                        <td>{{ $image->status }}</td>
                        <td>
                            <img src="{{ $image->getFirstMediaUrl('gallery_images') }}" alt="{{ $image->title }}" width="100">
                        </td>
                        <td>
                            <a href="{{ route('gallery.show', $image->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('gallery.edit', $image->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('gallery.destroy', $image->id) }}" method="POST" style="display:inline-block;">
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
            <p>No images found.</p>
        @endif
    </div>
@endsection
