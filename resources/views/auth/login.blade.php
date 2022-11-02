{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
    					<div class="text-center mb-3">
    						<img src="images/logo-full-black.png" alt="">
    					</div>
                        <h4 class="text-center mb-4">Faça login na sua conta</h4>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label class="mb-1">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-1">Senha</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <div class="form-group">
                                   <div class="custom-control custom-checkbox ms-1">                                        
    									<input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar-me') }}
                                        </label>
    								</div>
                                </div>
                                <div class="form-group">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">ENTRAR</button>
                            </div>
                        </form>
                        <div class="new-account mt-3">
                            <p>Não tem uma conta? <a class="text-primary" href="{!! url('/register'); !!}">Inscrever-se</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  