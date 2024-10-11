
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ekibimiz</h1>

        <a href="{{ route('admin.team.create') }}" class="btn btn-primary mb-3">Yeni Ekip Üyesi Ekle</a>

        @if ($teams->count())
            <table class="table table-bordered table-responsive-sm">
                <thead>
                <tr>
                    <th>Profile Image</th>
                    <th>Full Name</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>
                            <img src="{{ $team->getProfileImageUrl() }}" alt="{{ $team->getFullNameAttribute() }}" width="80">
                        </td>
                        <td>{{ $team->getFullNameAttribute() }}</td>
                        <td>{{ $team->position }}</td>
                        <td>{{ ucfirst($team->status) }}</td>
                        <td>
                            <a href="{{ route('admin.team.show', $team->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST" style="display:inline-block;">
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
            <p>No team members found.</p>
        @endif
    </div>
@endsection
