<!-- resources/views/admin/our_services/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Service</h1>

        <form action="{{ route('admin.our_services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}" required>
            </div>

            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="text" name="icon" id="icon" class="form-control" value="{{ $service->icon }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ $service->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" name="number" id="number" class="form-control" value="{{ $service->number }}">
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ $service->location }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ $service->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $service->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
