@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Team Member</h1>

        <form action="{{ route('admin.team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $team->first_name }}" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $team->last_name }}" required>
            </div>

            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" value="{{ $team->position }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ $team->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ $team->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $team->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div class="form-group">
                <label for="profile_image">Upload New Profile Image (Optional)</label>
                <input type="file" name="profile_image" id="profile_image" class="form-control-file">
            </div>

            <div class="form-group">
                <label>Current Profile Image</label><br>
                <img src="{{ $team->getProfileImageUrl() }}" alt="{{ $team->getFullNameAttribute() }}" width="150">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
