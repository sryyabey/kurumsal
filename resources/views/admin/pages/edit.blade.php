@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sayfa Düzenle</h1>

        <!-- Başarı mesajı -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('pages.update', $page->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <!-- Başlık -->
            <div class="form-group">
                <label for="title">Başlık</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $page->title) }}" required>
            </div>


            <!-- İçerik -->
            <div class="form-group">
                <label for="content">İçerik</label>
                <textarea name="content" class="form-control" rows="5" required>{{ old('content', $page->content) }}</textarea>
            </div>

            <!-- SEO Başlık -->
            <div class="form-group">
                <label for="meta_title">SEO Başlık</label>
                <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title) }}">
            </div>

            <!-- SEO Açıklama -->
            <div class="form-group">
                <label for="meta_description">SEO Açıklama</label>
                <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description', $page->meta_description) }}</textarea>
            </div>

            <!-- SEO Anahtar Kelimeler -->
            <div class="form-group">
                <label for="meta_keywords">SEO Anahtar Kelimeler</label>
                <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $page->meta_keywords) }}">
            </div>

            <!-- Resim Ekleme -->
            <div class="form-group">
                <label for="images">Resimler</label>
                <input type="file" name="images[]" class="form-control" multiple>

                <!-- Mevcut Resimler -->
                @if($page->getMedia('images')->isNotEmpty())
                    <div class="mt-3">
                        <h5>Mevcut Resimler</h5>
                        <div class="row">
                            @foreach($page->getMedia('images') as $image)
                                <div class="col-md-3 mb-2">
                                    <img src="{{ $image->getUrl() }}" class="img-thumbnail" alt="Image">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            <div class="form-check form-check-primary">
                <input type="hidden" name="show_in_menu" value="0">  <!-- Hidden input ile default false ayarla -->
                <input type="checkbox" name="show_in_menu" class="form-check-input" id="show_in_menu" value="1" {{ old('show_in_menu', $page->show_in_menu) ? 'checked' : '' }}>
                <label for="show_in_menu" class="form-check-label">
                    Menüde Göster
                    <i class="input-helper"></i>
                </label>
            </div>


            <!-- Kaydet Butonu -->
            <button type="submit" class="btn btn-primary">Sayfayı Güncelle</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <!--
    <script>
        CKEDITOR.replace( 'content' );
    </script>
    -->
@endsection
