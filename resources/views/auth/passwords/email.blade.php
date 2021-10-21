<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Congobook - Reinitialisation du mot de passe</title>
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
                    @include('flash::message')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Reinitialisation du mot de passe</h3>
                    <p>Mot de passe oublié ? réinitialiser le rapidement grâce à votre Adresse Email</p>
                    <div class="page-links">
                        <a href="{{ route('login') }}" class="active">Connexion</a><a href="{{ route('register') }}">Inscription</a>
                    </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <input class="form-control @error('email') is-invalid @enderror"
                               type="text" name="email" @error('email') style="margin-bottom: 0;"  @enderror  placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" style="margin-bottom: 14px;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-button" style="margin-top: 5px;">
                            <button id="submit" type="submit" class="ibtn">Envoyer le lien de reinitialisation</button>
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
