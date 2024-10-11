<!-- resources/views/admin/our_services/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Service Details</h1>

        <div class="mb-3">
            <strong>Title:</strong>
            <p>{{ $service->title }}</p>
        </div>

        <div class="mb-3">
            <strong>Icon:</strong>
            <p>{{ $service->icon ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <strong>Description:</strong>
            <p>{{ $service->description ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <strong>Number:</strong>
            <p>{{ $service->number ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <strong>Location:</strong>
            <p>{{ $service->location ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <strong>Status:</strong>
            <p>{{ ucfirst($service->status) }}</p>
        </div>

        <a href="{{ route('admin.our_services.index') }}" class="btn btn-secondary">Back to Service List</a>
    </div>
@endsection
