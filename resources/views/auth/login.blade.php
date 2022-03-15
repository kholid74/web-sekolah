@extends('layouts.auth')

@section('content')
    <h4>Sign in to CMS</h4>
    <p>Enter your email & password to login</p>
    <form class="theme-form" method="post" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label class="col-form-label">Email Address</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                value="{{ old('email') }}">
        </div>
        @error('email')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title=""
                    title=""></button>
            </div>
        @enderror
        <div class="form-group">
            <label class="col-form-label">Password</label>
            <div class="form-input position-relative">
                <input class="form-control" type="password" name="password">
                <div class="show-hide"><span class="show"> </span></div>
            </div>
        </div>
        @error('password')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                    data-bs-original-title="" title=""></button>
            </div>
        @enderror
        <div class="form-group mb-0">
            <div class="checkbox p-0">
            </div>
            @if (Route::has('password.request'))
                <a class="link" href="{{ route('password.request') }}">{{ __('Lupa Password?') }}</a>
            @endif
            <div class="text-end mt-3">
                <button class="btn btn-primary btn-block w-100" type="submit">{{ __('Login') }}</button>
            </div>
        </div>
        </p>
    </form>
@endsection
