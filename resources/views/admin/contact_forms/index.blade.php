@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>İletişim Formu Gelenler</h1>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>İsim</th>
                <th>Email</th>
                <th>Mesaj</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contactForms as $contactForm)
                <tr>
                    <td>{{ $contactForm->id }}</td>
                    <td>{{ $contactForm->name }}</td>
                    <td>{{ $contactForm->email }}</td>
                    <td>{{ Str::limit($contactForm->message, 50) }}</td>
                    <td>
                        <a href="{{ route('contact-forms.show', $contactForm->id) }}" class="btn btn-primary">Görüntüle</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
