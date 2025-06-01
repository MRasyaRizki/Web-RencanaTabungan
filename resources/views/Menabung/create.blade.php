@extends('home')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="mb-4 text-center text-primary-emphasis">💰 Tambah Menabung</h3>

                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('menabung.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="tabungan_id" class="form-label">Pilih Tabungan</label>
                            <select name="tabungan_id" id="tabungan_id" class="form-select shadow-sm" required>
                                <option value="">-- Pilih Tabungan --</option>
                                @foreach ($tabungans as $tabungan)
                                    <option value="{{ $tabungan->id }}">{{ $tabungan->judul }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nominal" class="form-label">Nominal</label>
                            <input type="number" name="nominal" id="nominal" class="form-control shadow-sm" required min="1" placeholder="Masukkan jumlah tabungan">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm submit-btn">
                                <i class="bi bi-wallet2"></i> Simpan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background: linear-gradient(135deg, #e0f7f1, #d8f3dc);
    }

    .submit-btn {
        transition: all 0.3s ease-in-out;
        background-color: #2a9d8f;
        border-color: #2a9d8f;
    }

    .submit-btn:hover {
        background-color: #21867a;
        transform: scale(1.02);
        box-shadow: 0 6px 12px rgba(42, 157, 143, 0.3);
    }

    .card {
        background-color: #ffffffd9;
    }
</style>
@endsection
