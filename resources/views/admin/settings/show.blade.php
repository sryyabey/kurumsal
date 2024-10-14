@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Setting Details</h1>

        <div class="card">
            <div class="card-header">
                <h3>{{ $setting->about_title }}</h3>
            </div>
            <div class="card-body">
                <p><strong>About Description:</strong> {{ $setting->about_description }}</p>
                <p><strong>Slogan Title:</strong> {{ $setting->slogan_title }}</p>
                <p><strong>Slogan Description:</strong> {{ $setting->slogan_description }}</p>
                <p><strong>Team Title:</strong> {{ $setting->team_title }}</p>
                <p><strong>Team Description:</strong> {{ $setting->team_description }}</p>
                <p><strong>Statistic Title:</strong> {{ $setting->statistic_title }}</p>
                <p><strong>Statistic Description:</strong> {{ $setting->statistic_description }}</p>
                <p><strong>Services Title:</strong> {{ $setting->services_title }}</p>
                <p><strong>Services Description:</strong> {{ $setting->services_description }}</p>
                <p><strong>Gallery Title:</strong> {{ $setting->gallery_title }}</p>
                <p><strong>Gallery Description:</strong> {{ $setting->gallery_description }}</p>
                <p><strong>Social Title:</strong> {{ $setting->social_title }}</p>
                <p><strong>Social Description:</strong> {{ $setting->social_description }}</p>
                <p><strong>Preview Title:</strong> {{ $setting->preview_title }}</p>
                <p><strong>Preview Description:</strong> {{ $setting->preview_description }}</p>
                <p><strong>Contact Title:</strong> {{ $setting->contact_title }}</p>
                <p><strong>Contact Description:</strong> {{ $setting->contact_description }}</p>
                <p><strong>Footer Title:</strong> {{ $setting->footer_title }}</p>
                <p><strong>Footer Description:</strong> {{ $setting->footer_description }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.settings.edit', $setting->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
