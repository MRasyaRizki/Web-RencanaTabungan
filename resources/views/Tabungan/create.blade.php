@extends('home')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="mb-4 text-center text-primary-emphasis">🏦 Tambah Tabungan Baru</h3>

                    <form action="{{ route('tabungan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Tabungan</label>
                            <input type="text" name="judul" id="judul" class="form-control shadow-sm" required placeholder="Contoh: Tabungan Liburan">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto (opsional)</label>
                            <input type="file" name="foto" id="foto" class="form-control shadow-sm">
                        </div>

                        <div class="mb-3">
                            <label for="target_nominal" class="form-label">Target Nominal</label>
                            <input type="number" name="target_nominal" id="target_nominal" class="form-control shadow-sm" required placeholder="Contoh: 5000000">
                        </div>

                        <div class="mb-3">
                            <label for="target_tanggal" class="form-label">Target Tanggal Tercapai</label>
                            <input type="date" name="target_tanggal" id="target_tanggal" class="form-control shadow-sm" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg rounded-3 shadow-sm save-btn">
                                <i class="bi bi-check-circle-fill"></i> Simpan
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
        background: linear-gradient(to right, #d8f3dc, #e0f7f1);
    }

    .save-btn {
        transition: all 0.3s ease-in-out;
        background-color: #2a9d8f;
        border-color: #2a9d8f;
        font-weight: 600;
    }

    .save-btn:hover {
        background-color: #21867a;
        transform: scale(1.02);
        box-shadow: 0 6px 12px rgba(42, 157, 143, 0.3);
    }

    .card {
        background-color: #ffffffee;
    }
</style>
@endsection
