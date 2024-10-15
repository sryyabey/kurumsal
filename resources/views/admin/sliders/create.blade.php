@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Create New Slider</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Slider Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Slider</button>
                    <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Back to List</a>
                </form>
            </div>
        </div>
    </div>
@endsection
