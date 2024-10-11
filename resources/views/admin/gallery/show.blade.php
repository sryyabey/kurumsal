<!-- resources/views/gallery/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $image->title }}</h1>

        <div class="mb-3">
            <img src="{{ $image->getFirstMediaUrl('gallery_images') }}" alt="{{ $image->title }}" class="img-fluid" width="300">
        </div>

        <div class="mb-3">
            <strong>Description:</strong>
            <p>{{ $image->description }}</p>
        </div>

        <div class="mb-3">
            <strong>Status:</strong>
            <p>{{ ucfirst($image->status) }}</p>
        </div>

        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Back to Gallery</a>
    </div>
@endsection
