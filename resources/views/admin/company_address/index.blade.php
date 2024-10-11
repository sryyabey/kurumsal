@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Company Addresses</h1>

        <a href="{{ route('admin.company_address.create') }}" class="btn btn-primary mb-3">Add New Address</a>

        @if ($addresses->count())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($addresses as $address)
                    <tr>
                        <td>{{ $address->title }}</td>
                        <td>{{ $address->country }}</td>
                        <td>{{ $address->city }}</td>
                        <td>{{ $address->phone }}</td>
                        <td>{{ ucfirst($address->status) }}</td>
                        <td>
                            <a href="{{ route('admin.company_address.show', $address->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.company_address.edit', $address->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.company_address.destroy', $address->id) }}" method="POST" style="display:inline-block;">
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
            <p>No addresses found.</p>
        @endif
    </div>
@endsection
