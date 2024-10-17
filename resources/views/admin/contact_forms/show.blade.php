@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>İletişim Formu Detayı</h1>

        <div class="card">
            <div class="card-body">
                <h5>İsim: {{ $contactForm->name }}</h5>
                <h6>Email: {{ $contactForm->email }}</h6>
                <p>Mesaj: {{ $contactForm->message }}</p>
            </div>
        </div>

        <a href="{{ route('contact-forms.index') }}" class="btn btn-secondary mt-3">Geri Dön</a>
    </div>
@endsection
