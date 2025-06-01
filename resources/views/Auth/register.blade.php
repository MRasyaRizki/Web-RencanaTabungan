@extends('home')

@section('auth')
<style>
    body {
        background: linear-gradient(135deg, #2a9d8f, #264653);
        min-height: 100vh;
    }

    .card-auth {
        background: #ffffffdd;
        border-radius: 1rem;
        box-shadow: 0 8px 20px rgba(38, 70, 83, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 100%;
        max-width: 400px;
    }

    .btn-tabungsantuy {
        background: #2a9d8f;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-tabungsantuy:hover {
        background: #21867a;
    }

    a.text-tabungsantuy {
        color: #2a9d8f;
        transition: color 0.3s ease;
    }

    a.text-tabungsantuy:hover {
        color: #21867a;
        text-decoration: underline;
    }
    </style>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card card-auth p-4 shadow-sm">
        <h2 class="mb-4 text-center text-dark">Daftar TabungSantuy</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" name="name" class="form-control" required value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-tabungsantuy w-100 mb-3">Daftar</button>
            </form>

            <p class="text-center mb-0">Sudah punya akun?
            <a href="/login" class="text-tabungsantuy fw-semibold">Login di sini</a>
            </p>
    </div>
</div>
@endsection
