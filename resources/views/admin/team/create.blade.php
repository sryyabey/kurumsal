<!-- resources/views/admin/team/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Yeni Ekip Üyesi Ekle</h1>

        <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div class="form-group">
                <label for="profile_image">Upload Profile Image</label>
                <input type="file" name="profile_image" id="profile_image" class="form-control-file" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
