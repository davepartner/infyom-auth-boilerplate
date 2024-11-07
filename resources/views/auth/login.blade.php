@extends('auth.auth_layout')

@section('content')

       <div class="text-center mb-4">
            <h1 class="h3">{{ config('app.name') }}</h1>
            <p class="text-muted">Sign in to your account</p>
        </div>

        <div class="card">
            <div class="card-body">
                <!-- Google Login Button -->
                <a href="{{ route('google.redirect') }}" class="btn btn-google w-100 mb-3 bg-red-500 text-grey-300" >
                    {{-- <a href="{{ route('google.redirect') }}" class="btn btn-google w-100 mb-3" style="background-color: red;"> --}}
                    <img src="https://www.google.com/favicon.ico" alt="Google">
                    Continue with Google
                </a>

                <div class="divider">
                    <span>or sign in with email</span>
                </div>

                <!-- Email Login Form -->
                <form method="post" action="{{ url('/login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email"
                               name="email"
                               class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}"
                               placeholder="name@example.com">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password"
                               name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Enter your password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a href="{{ route('password.request') }}"
                         class="text-decoration-none text-grey-300">
                         Forgot password?</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </form>
            </div>

            <div class="text-center mt-4">
                <p class="text-muted">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-decoration-none text-grey-300">Create one</a>
                </p>
            </div>
        </div>


        @endsection
