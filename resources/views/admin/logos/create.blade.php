@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Create New Logo</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.logos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="number" name="number" class="form-control" id="number" value="{{ old('number') }}">
                    </div>

                    <div class="form-group">
                        <label for="alt">Alt Text</label>
                        <input type="text" name="alt" class="form-control" id="alt" value="{{ old('alt') }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Logo Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Logo</button>
                    <a href="{{ route('admin.logos.index') }}" class="btn btn-secondary">Back to List</a>
                </form>
            </div>
        </div>
    </div>
@endsection
