@extends('home')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm rounded-4 p-4">
        <h3 class="mb-4">Edit Tabungan</h3>

        @if ($errors->any())
            <div class="alert alert-danger rounded-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tabungan.update', $tabungan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">Judul Tabungan</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $tabungan->judul) }}" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto (opsional)</label>
                <input type="file" name="foto" id="foto" class="form-control">
                @if($tabungan->foto)
                    <img src="{{ asset('storage/images/' . $tabungan->foto) }}" alt="Foto Tabungan" class="mt-2 rounded shadow-sm" style="max-width: 150px;">
                @endif
            </div>

            <div class="mb-3">
                <label for="target_nominal" class="form-label">Target Nominal</label>
                <input type="number" name="target_nominal" id="target_nominal" class="form-control" value="{{ old('target_nominal', $tabungan->target_nominal) }}" required>
            </div>

            <div class="mb-3">
                <label for="target_tanggal" class="form-label">Tanggal Target</label>
                <input type="date" name="target_tanggal" id="target_tanggal" class="form-control" value="{{ old('target_tanggal', $tabungan->target_tanggal) }}" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="{{ route('tabungan.index') }}" class="btn btn-outline-secondary">← Kembali</a>
                <button type="submit" class="btn btn-success px-4">Simpan Perubahan</button>
            </div>
        </form>

        <form action="{{ route('tabungan.destroy', $tabungan->id) }}" method="POST" class="mt-4" onsubmit="return confirm('Yakin ingin menghapus tabungan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger w-100 rounded-pill">
                <i class="bi bi-trash-fill"></i> Hapus Tabungan
            </button>
        </form>
    </div>
</div>

<style>
    .card {
        background: #ffffffcc;
        backdrop-filter: blur(6px);
    }

    .btn:hover {
        transform: scale(1.02);
        transition: 0.2s ease;
    }
</style>
@endsection
