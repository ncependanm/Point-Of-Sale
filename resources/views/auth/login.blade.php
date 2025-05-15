@extends('layouts.auth')

@section('login')
<div class="text-center">

        <img src="{{ url($setting->path_logo) }}" alt="logo.png" width="100" class="logo">
        <h1 class="text-white h3">Login</h1>
</div>
<form class="mt-4" action="{{ route('login') }}" method="post">
    @csrf
    <div class="input-group uf-input-group input-group-lg mb-3">
        <span class="input-group-text fa fa-user"></span>
        <input type="text" class="form-control" name="email" placeholder="Username or Email address"
            value="{{ old('email') }}">
        @error('email')
        <span class="help-block">{{ $message }}</span>
        @else
        <span class="help-block with-errors"></span>
        @enderror
    </div>
    <div class="input-group uf-input-group input-group-lg mb-3">
        <span class="input-group-text fa fa-lock"></span>
        <input type="password" name="password" class="form-control" placeholder="Password">
        @error('password')
        <span class="help-block">{{ $message }}</span>
        @else
        <span class="help-block with-errors"></span>
        @enderror
    </div>
    <div class="d-flex mb-3 justify-content-between">
        <div class="form-check">
            <input type="checkbox" class="form-check-input uf-form-check-input" id="exampleCheck1">
            <label class="form-check-label text-white" for="exampleCheck1">Remember Me</label>
        </div>
        {{-- <a href="#">Forgot password?</a> --}}
    </div>
    <div class="d-grid mb-4">
        <button type="submit" class="btn uf-btn-primary btn-lg">Login</button>
    </div>
</form>
@endsection
