@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
  <h4 class="fw-bold text-success text-center">Daftar Tanaman Hias GreenLeaf</h4>

  <div class="row mt-4">
    @foreach ($plants as $plant)
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">{{ $plant['nama'] }}</h5>
            <p class="text-muted mb-1">Kategori: {{ $plant['kategori'] }}</p>
            <p class="fw-bold text-success">{{ $plant['harga'] }}</p>
            <button class="btn btn-outline-success btn-sm">Detail</button>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
