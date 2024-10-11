<!-- resources/views/admin/socials/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Social Media Links</h1>

        <a href="{{ route('admin.socials.create') }}" class="btn btn-primary mb-3">Add New Social Media</a>

        @if ($socials->count())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Icon</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($socials as $social)
                    <tr>
                        <td>{{ $social->title }}</td>
                        <td>{{ $social->name }}</td>
                        <td><a href="{{ $social->link }}" target="_blank">{{ $social->link }}</a></td>
                        <td><i class="{{ $social->icon }}"></i> {{ $social->icon }}</td>
                        <td>{{ ucfirst($social->status) }}</td>
                        <td>
                            <a href="{{ route('admin.socials.show', $social->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.socials.edit', $social->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.socials.destroy', $social->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No social media links found.</p>
        @endif
    </div>
@endsection
