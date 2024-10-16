@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Background Images</h1>
                <a href="{{ route('admin.background-images.create') }}" class="btn btn-primary mb-3">Create New Background Image</a>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Number</th>
                        <th>Alt Text</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($backgroundImages as $backgroundImage)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $backgroundImage->number }}</td>
                            <td>{{ $backgroundImage->alt }}</td>
                            <td>
                                @if($backgroundImage->getFirstMediaUrl('images'))
                                    <img src="{{ $backgroundImage->getFirstMediaUrl('images') }}" alt="Background Image" width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <!--
                                <a href="{{ route('admin.background-images.edit', $backgroundImage->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                -->
                                <form action="{{ route('admin.background-images.destroy', $backgroundImage->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
