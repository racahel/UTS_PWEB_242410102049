@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="text-center">
  <h4 class="fw-bold text-success">Profile Pengguna</h4>
  <p>Nama pengguna: <b>{{ $username ?? 'Tamu' }}</b></p>
  <p>Status: Admin GreenLeaf 🌿</p>
  <p>Email: {{ strtolower($username ?? 'guest') }}@greenleaf.com</p>
</div>
@endsection
