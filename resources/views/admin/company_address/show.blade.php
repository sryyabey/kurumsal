<!-- resources/views/admin/company_address/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Company Address Details</h1>

        <div class="mb-3">
            <strong>Title:</strong>
            <p>{{ $address->title }}</p>
        </div>

        <div class="mb-3">
            <strong>Country:</strong>
            <p>{{ $address->country }}</p>
        </div>

        <div class="mb-3">
            <strong>City:</strong>
            <p>{{ $address->city }}</p>
        </div>

        <div class="mb-3">
            <strong>District:</strong>
            <p>{{ $address->district ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <strong>Phone:</strong>
            <p>{{ $address->phone ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <strong>Email:</strong>
            <p>{{ $address->email ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <strong>Postcode:</strong>
            <p>{{ $address->postcode ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <strong>Google Map Link:</strong>
            <p><a href="{{ $address->google_map_link }}" target="_blank">{{ $address->google_map_link ?? 'N/A' }}</a></p>
        </div>

        <div class="mb-3">
            <strong>Website Link:</strong>
            <p><a href="{{ $address->website_link }}" target="_blank">{{ $address->website_link ?? 'N/A' }}</a></p>
        </div>

        <div class="mb-3">
            <strong>Status:</strong>
            <p>{{ ucfirst($address->status) }}</p>
        </div>

        <div class="mb-3">
            <strong>Description:</strong>
            <p>{{ $address->description ?? 'N/A' }}</p>
        </div>

        <a href="{{ route('admin.company_address.index') }}" class="btn btn-secondary">Back to Address List</a>
    </div>
@endsection
