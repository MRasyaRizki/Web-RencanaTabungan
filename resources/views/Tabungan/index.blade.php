@extends('home')

@section('content')
<div class="bg-header px-3 py-3 rounded-3 shadow-sm mb-4" id="header">
    <h2 class="mb-0">📂 Daftar Semua Tabungan</h2>
</div>


@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="row">
    @php
        $tabungans = $tabungans->sortByDesc(function($tabungan) {
            return $tabungan->totalTabungan() >= $tabungan->target_nominal ? 0 : 1;
        });
    @endphp
    @foreach($tabungans as $tabungan)
        @php
            $total = $tabungan->totalTabungan();
            $tercapai = $total >= $tabungan->target_nominal;
        @endphp

        <div class="col-md-4 mb-4">
            <a href="{{ route('tabungan.edit', $tabungan->id) }}" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm hover-scale rounded-4 {{ $tercapai ? 'bg-light text-muted' : '' }}">
                    <img
                        src="{{ $tabungan->foto ? asset('storage/images/' . $tabungan->foto) : asset('storage/images/default.jpg') }}"
                        alt="Foto Tabungan"
                        class="card-img-top fixed-img">

                    <div class="card-body">
                        <h5 class="card-title">{{ $tabungan->judul }}</h5>
                        <p>Target: Rp{{ number_format($tabungan->target_nominal, 0, ',', '.') }}</p>
                        <p>Tanggal Target: {{ $tabungan->target_tanggal }}</p>
                        <p>Sudah Terkumpul: Rp{{ number_format($total, 0, ',', '.') }}</p>
                        <p>Status:
                            @if($tercapai)
                                <span class="badge bg-success">Tercapai</span>
                            @else
                                <span class="badge bg-warning text-dark">Berlangsung</span>
                            @endif
                        </p>
                        <div class="progress mb-2" style="height: 10px;">
                            <div class="progress-bar {{ $tercapai ? 'bg-success' : 'bg-info' }}" role="progressbar"
                                style="width: {{ min(100, round(($total / $tabungan->target_nominal) * 100, 2)) }}%;">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>


<style>
    .bg-header {
    background-color: #21867a;
    color: white;
    }

    .hover-scale {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .hover-scale:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .fixed-img {
    width: 100%;
    height: 310px;
    object-fit: cover;
    }


    /* Desktop */
    .content {
        margin-left: 250px;
        padding: 2rem;
    }

    /* Mobile */
    @media (max-width: 767.98px) {
        .content {
            margin-left: 0;
            padding: 1rem;

        #header {
            margin-top: 30px;
            text-align: center;
        }
        }


    }
</style>
@endsection
