@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="text-center">
  <h3 class="fw-bold text-success">Selamat datang, {{ $username ?? 'Tamu' }}!</h3>
  <p class="mt-2">Terima kasih sudah login ke sistem pengelolaan toko tanaman hias <b>GreenLeaf</b>.</p>
  <img src="https://cdn-icons-png.flaticon.com/512/764/764855.png" width="120" class="mt-3">
</div>
@endsection
