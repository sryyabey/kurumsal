@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Social Media Link Details</h1>

        <div class="mb-3">
            <strong>Title:</strong>
            <p>{{ $social->title }}</p>
        </div>

        <div class="mb-3">
            <strong>Name:</strong>
            <p>{{ $social->name }}</p>
        </div>

        <div class="mb-3">
            <strong>Link:</strong>
            <p><a href="{{ $social->link }}" target="_blank">{{ $social->link }}</a></p>
        </div>

        <div class="mb-3">
            <strong>Icon:</strong>
            <p><i class="{{ $social->icon }}"></i> {{ $social->icon }}</p>
        </div>

        <div class="mb-3">
            <strong>Status:</strong>
            <p>{{ ucfirst($social->status) }}</p>
        </div>

        <a href="{{ route('admin.socials.index') }}" class="btn btn-secondary">Back to Social Media List</a>
    </div>
@endsection
