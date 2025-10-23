@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="text-center mt-5">
  <h2 class="fw-bold text-success">Login GreenLeaf</h2>

  @if(session('error'))
    <div class="alert alert-danger mt-3">{{ session('error') }}</div>
  @endif

  <form method="POST" action="{{ route('doLogin') }}" class="mt-4">
    @csrf
    <div class="mb-3">
      <input type="text" name="username" class="form-control w-50 mx-auto" placeholder="Username">
    </div>
    <div class="mb-3">
      <input type="password" name="password" class="form-control w-50 mx-auto" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-success">Masuk</button>
  </form>
</div>
@endsection
