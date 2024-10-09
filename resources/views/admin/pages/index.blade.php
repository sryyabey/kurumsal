@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sayfalar</h1>
        <a href="{{ route('pages.create') }}" class="btn btn-primary mb-3">Yeni Sayfa Ekle</a>
        <table class="table">
            <thead>
            <tr>
                <th>Resim</th>
                <th>Başlık</th>
                <th>Menüde Göster</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <!-- Resimleri göster -->
                    <td>
                        @if($page->getFirstMediaUrl('images'))
                            <img src="{{ $page->getFirstMediaUrl('images', 'thumb') }}" alt="Sayfa Resmi" width="80" class="img-thumbnail">
                        @else
                            <span>Resim Yok</span>
                        @endif
                    </td>

                    <!-- Sayfa Başlığı -->
                    <td>{{ $page->title }}</td>

                    <!-- Menüde Göster Durumu -->
                    <td>{{ $page->show_in_menu ? 'Evet' : 'Hayır' }}</td>

                    <!-- İşlem Butonları -->
                    <td>
                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
