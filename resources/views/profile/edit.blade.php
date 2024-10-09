@extends('layouts.app')
@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            font-family: Arial, sans-serif;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 1rem;
            background-color: #f7f7f7;
            transition: background-color 0.3s ease;
        }
        .form-control:focus {
            background-color: #eef;
            border-color: #007bff;
        }
        .btn-primary {
            background-color: #5a9bd4;
            border: none;
            padding: 10px;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #428bca;
        }
        .form-group label {
            font-size: 0.9rem;
            color: #555;
        }
    </style>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-sm-8">
            <div class="card p-4">
                <div class="card-title text-center">
                    Profil Düzenleme
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update', $user->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="first_name">Ad</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $user->first_name }}" placeholder="Ad" required>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Soyad</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $user->last_name }}" placeholder="Soyad" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="{{ $user->phone }}" placeholder="Telefon">
                        </div>

                        <div class="form-group">
                            <label for="country">Ülke</label>
                            <input type="text" name="country" class="form-control" id="country" value="{{ $user->country }}" placeholder="Ülke">
                        </div>

                        <div class="form-group">
                            <label for="city">Şehir</label>
                            <input type="text" name="city" class="form-control" id="city" value="{{ $user->city }}" placeholder="Şehir">
                        </div>

                        <div class="form-group">
                            <label for="address">Adres</label>
                            <input type="text" name="address" class="form-control" id="address" value="{{ $user->address }}" placeholder="Adres">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Yeni Şifre (Eğer değiştirmek istemiyorsanız boş bırakın)</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Yeni Şifre">
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Şifreyi Onayla</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Şifreyi Onayla">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Bilgileri Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
