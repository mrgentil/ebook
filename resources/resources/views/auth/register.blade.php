<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Congobook - Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <meta name="language" content="fr"/>
    <meta name="copyright" content="//umoja.com"/>
    <meta name="author" content="umoja.com"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#78AB4E"/>
    <meta property="og:title" content=""/>
    <meta property="og:site_name" content="{{ setting('site.title') }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:language" content="{{ app()->getLocale() }}"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>

    <!-- Schema.org meta pour Google+ -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <!-- Card meta pour Twitter -->
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="@UmojaTechnology">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <!-- Twitter summary card avec image large de 280x150px -->
    <meta name="twitter:image:src" content="{{  Voyager::image(setting('site.meta_image')) }}">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('img/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/icons/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icons/apple-touch-icon-114x114.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/iofrm-theme9.css') }}">
</head>
<body>
<div class="form-body">
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="{{ asset('auth/images/graphic1.svg') }}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <div class="website-logo-inside" style="margin-bottom: 20px;">
                        <a href="{{ route('home') }}">
                            <div class="logo">
                                <img class="logo-size" src="{{ asset('images/header/congobook-2.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                    <h3>S'inscrire</h3>
                    <p>Créez un compte en quelques secondes et devenez maitre de votre bibliothèque.</p>
                    <div class="page-links">
                        <a href="{{ route('login') }}">Connexion</a><a href="{{ route('register') }}" class="active">Inscription</a>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input class="form-control @error('name') is-invalid @enderror" name="name"  @error('name') style="margin-bottom: 0;"  @enderror value="{{ old('name') }}"
                               required autocomplete="name" autofocus type="text" placeholder="Nom">
                        @error('name')
                            <span class="invalid-feedback" style="margin-bottom: 14px;"  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input class="form-control @error('email') is-invalid @enderror" @error('email') style="margin-bottom: 0;"  @enderror
                               name="email" value="{{ old('email') }}" autocomplete="email" type="email" placeholder="E-mail" required>
                        @error('email')
                        <span class="invalid-feedback" style="margin-bottom: 14px;"  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        <input class="form-control @error('password') is-invalid @enderror"  @error('password') style="margin-bottom: 0;"  @enderror
                               autocomplete="new-password"
                               type="password" name="password" placeholder="Mot de passe" required>
                        @error('password')
                        <span class="invalid-feedback" style="margin-bottom: 14px;"  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input class="form-control"  name="password_confirmation" required autocomplete="new-password"
                               type="password" placeholder="Confirmation">

                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('auth/js/jquery.min.js') }}"></script>
<script src="{{ asset('auth/js/popper.min.js') }}"></script>
<script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('auth/js/main.js') }}"></script>
</body>
</html>
