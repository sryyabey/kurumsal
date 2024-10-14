@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Setting</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="about_title">About Title</label>
                        <input type="text" class="form-control" id="about_title" name="about_title" value="{{ old('about_title', $setting->about_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="about_description">About Description</label>
                        <input type="text" class="form-control" id="about_description" name="about_description" value="{{ old('about_description', $setting->about_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slogan_title">Slogan Title</label>
                        <input type="text" class="form-control" id="slogan_title" name="slogan_title" value="{{ old('slogan_title', $setting->slogan_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slogan_description">Slogan Description</label>
                        <input type="text" class="form-control" id="slogan_description" name="slogan_description" value="{{ old('slogan_description', $setting->slogan_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="team_title">Team Title</label>
                        <input type="text" class="form-control" id="team_title" name="team_title" value="{{ old('team_title', $setting->team_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="team_description">Team Description</label>
                        <input type="text" class="form-control" id="team_description" name="team_description" value="{{ old('team_description', $setting->team_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="statistic_title">Statistic Title</label>
                        <input type="text" class="form-control" id="statistic_title" name="statistic_title" value="{{ old('statistic_title', $setting->statistic_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="statistic_description">Statistic Description</label>
                        <input type="text" class="form-control" id="statistic_description" name="statistic_description" value="{{ old('statistic_description', $setting->statistic_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="services_title">Services Title</label>
                        <input type="text" class="form-control" id="services_title" name="services_title" value="{{ old('services_title', $setting->services_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="services_description">Services Description</label>
                        <input type="text" class="form-control" id="services_description" name="services_description" value="{{ old('services_description', $setting->services_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gallery_title">Gallery Title</label>
                        <input type="text" class="form-control" id="gallery_title" name="gallery_title" value="{{ old('gallery_title', $setting->gallery_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gallery_description">Gallery Description</label>
                        <input type="text" class="form-control" id="gallery_description" name="gallery_description" value="{{ old('gallery_description', $setting->gallery_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="social_title">Social Title</label>
                        <input type="text" class="form-control" id="social_title" name="social_title" value="{{ old('social_title', $setting->social_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="social_description">Social Description</label>
                        <input type="text" class="form-control" id="social_description" name="social_description" value="{{ old('social_description', $setting->social_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="preview_title">Preview Title</label>
                        <input type="text" class="form-control" id="preview_title" name="preview_title" value="{{ old('preview_title', $setting->preview_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="preview_description">Preview Description</label>
                        <input type="text" class="form-control" id="preview_description" name="preview_description" value="{{ old('preview_description', $setting->preview_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact_title">Contact Title</label>
                        <input type="text" class="form-control" id="contact_title" name="contact_title" value="{{ old('contact_title', $setting->contact_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact_description">Contact Description</label>
                        <input type="text" class="form-control" id="contact_description" name="contact_description" value="{{ old('contact_description', $setting->contact_description) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="footer_title">Footer Title</label>
                        <input type="text" class="form-control" id="footer_title" name="footer_title" value="{{ old('footer_title', $setting->footer_title) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="footer_description">Footer Description</label>
                        <input type="text" class="form-control" id="footer_description" name="footer_description" value="{{ old('footer_description', $setting->footer_description) }}">
                    </div>
                </div>
            </div>



















            <button type="submit" class="btn btn-success">Update Setting</button>
            <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
@endsection
