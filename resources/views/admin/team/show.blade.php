@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Team Member Details</h1>

        <div class="mb-3">
            <strong>Full Name:</strong>
            <p>{{ $team->getFullNameAttribute() }}</p>
        </div>

        <div class="mb-3">
            <strong>Position:</strong>
            <p>{{ $team->position }}</p>
        </div>

        <div class="mb-3">
            <strong>Description:</strong>
            <p>{{ $team->description }}</p>
        </div>

        <div class="mb-3">
            <strong>Status:</strong>
            <p>{{ ucfirst($team->status) }}</p>
        </div>

        <div class="mb-3">
            <strong>Profile Image:</strong><br>
            <img src="{{ $team->getProfileImageUrl() }}" alt="{{ $team->getFullNameAttribute() }}" width="150">
        </div>

        <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">Back to Team List</a>
    </div>
@endsection
