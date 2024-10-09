@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Yeni Sayfa Oluştur</h1>

        <!-- Hata mesajları -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('pages.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Başlık -->
            <div class="form-group">
                <label for="title">Başlık</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <!-- İçerik -->
            <div class="form-group">
                <label for="content">İçerik</label>
                <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="5" required>{{ old('content') }}</textarea>
                @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- SEO Başlık -->
            <div class="form-group">
                <label for="meta_title">SEO Başlık</label>
                <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" value="{{ old('meta_title') }}">
                @error('meta_title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- SEO Açıklama -->
            <div class="form-group">
                <label for="meta_description">SEO Açıklama</label>
                <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" rows="3">{{ old('meta_description') }}</textarea>
                @error('meta_description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- SEO Anahtar Kelimeler -->
            <div class="form-group">
                <label for="meta_keywords">SEO Anahtar Kelimeler</label>
                <input type="text" name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" value="{{ old('meta_keywords') }}">
                @error('meta_keywords')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Resim Yükleme -->
            <div class="form-group">
                <label for="images">Resimler</label>
                <input type="file" name="images[]" class="form-control @error('images') is-invalid @enderror" multiple>
                @error('images')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-check form-check-primary">
                <input type="hidden" name="show_in_menu" value="0">  <!-- Hidden input ile default false ayarla -->
                <input type="checkbox" name="show_in_menu" class="form-check-input" id="show_in_menu" value="1" {{ old('show_in_menu') ? 'checked' : '' }}>
                <label for="show_in_menu" class="form-check-label">
                    Menüde Göster
                    <i class="input-helper"></i>
                </label>
            </div>

            <!-- Kaydet Butonu -->
            <button type="submit" class="btn btn-primary">Sayfayı Oluştur</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
