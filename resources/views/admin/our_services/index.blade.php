@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Our Services</h1>

        <a href="{{ route('admin.our_services.create') }}" class="btn btn-primary mb-3">Add New Service</a>

        @if ($services->count())
            <table class="table table-bordered table-responsive-sm">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Icon</th>
                    <th>Description</th>
                    <th>Number</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->icon }}</td>
                        <td>{{ Str::limit($service->description,50) }}</td>
                        <td>{{ $service->number }}</td>
                        <td>{{ $service->location }}</td>
                        <td>{{ ucfirst($service->status) }}</td>
                        <td>
                            <a href="{{ route('admin.our_services.show', $service->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.our_services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.our_services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
            <p>No services found.</p>
        @endif
    </div>
@endsection
