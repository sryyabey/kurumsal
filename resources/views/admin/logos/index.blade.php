@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Logos</h1>
                <a href="{{ route('admin.logos.create') }}" class="btn btn-primary mb-3">Create New Logo</a>

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
                    @foreach ($logos as $logo)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $logo->number }}</td>
                            <td>{{ $logo->alt }}</td>
                            <td>
                                @if($logo->getFirstMediaUrl('logos'))
                                    <img src="{{ $logo->getFirstMediaUrl('logos') }}" alt="Logo Image" width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.logos.edit', $logo->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.logos.destroy', $logo->id) }}" method="POST" style="display:inline-block;">
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
