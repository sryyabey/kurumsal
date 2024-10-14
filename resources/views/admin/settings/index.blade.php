@extends('layouts.app')

@section('content')
    <div class="container">
        @if($settings->count() == 0)
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Settings List</h1>
            <a href="{{ route('admin.settings.create') }}" class="btn btn-primary">Create New Setting</a>
        </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>About Title</th>
                <th>Slogan Title</th>
                <th>Team Title</th>
                <th>Statistic Title</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($settings as $setting)
                <tr>
                    <td>{{ $setting->id }}</td>
                    <td>{{ $setting->about_title }}</td>
                    <td>{{ $setting->slogan_title }}</td>
                    <td>{{ $setting->team_title }}</td>
                    <td>{{ $setting->statistic_title }}</td>
                    <td>
                        <a href="{{ route('admin.settings.edit', $setting->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.settings.destroy', $setting->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No settings found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
