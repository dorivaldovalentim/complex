<!DOCTYPE html>
<html lang="pt_AO">

    <head>
        <title>Complex » Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        {{-- CSS Libs --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/animate.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/bootstrap-switch.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/checkbox3.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/jquery.dataTables.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/dataTables.bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/select2.min.css') }}" />

        {{-- CSS App --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}" />

        {{-- Themes --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-blue.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-green.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-yellow.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-pink.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-red.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-orange.css') }}" />
    </head>

    <body class="flat-blue login-page">

        <div class="container">

            <div class="login-box">

                <div>

                    <div class="login-form row">

                        <div class="col-sm-12 text-center login-header">
                            <i class="login-logo fa fa-connectdevelop fa-5x"></i>
                            <h4 class="login-title">Complex » Register</h4>
                        </div>

                        <div class="col-sm-12">

                            <div class="login-body">

                                <div class="progress hidden" id="login-progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        Cadastrando conta...
                                    </div>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="control">

                                        <input type="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nome" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="control">

                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="control">

                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="control">

                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirme a senha" required autocomplete="new-password">

                                    </div>

                                    <div class="login-button text-center">
                                        
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                            
                                    </div>

                                </form>

                            </div>

                            <div class="login-footer">
                                <span class="text-right">
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                    @if (Route::has('password.request'))
                                        <span class="text-white">||</span>
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>