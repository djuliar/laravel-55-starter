@extends('layouts._login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="login-box col-lg-4 col-12">
            <div class="login-logo">
                <a href="{{ url('/') }}" class="font-weight-bold">
                    <img src="{{ asset('img/src/brand.svg') }}" alt="{{ config('app.name') }}" class="brand-image" height="50">
                </a>
            </div>
            <div class="card justify-content-center">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Masukkan Email dan Password Anda!</p>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection
