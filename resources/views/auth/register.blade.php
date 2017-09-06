@extends('templates.register')

@section('content')
    <section id="banner">
        <div class="container">

            <div class="sign-up-form">
                <a href="index.html" class="logo"><img src="images/logo.png" alt="Friend Finder"/></a>
                <h2 class="text-white">Inscription</h2>
                <div class="line-divider"></div>
                <div class="form-wrapper">
                    <p class="signup-text">Inscrivez-vous dès-maintenant!</p>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <fieldset class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="example-name" placeholder="Nom"
                                   name="last_name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="example-name" placeholder="Prénom"
                                   name="first_name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" id="example-email"
                                   placeholder="Votre adresse email" name="email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" id="example-password"
                                   placeholder="Votre mot de passe" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group{{ $errors->has('situation') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="example-name" placeholder="Situation actuelle"
                                   name="situation">
                            @if ($errors->has('situation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('situation') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" class="form-control" id="example-name" placeholder="Ville" name="city">
                            @if ($errors->has('city'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                    </form>
                    <p><a href="#">En vous inscrivant, vous acceptez les conditions d'utilisation</a></p>
                    <button type="submit" class="btn-secondary">S'inscrire</button>
                </div>
                <a href="#">Vous avez déjà un compte?</a>
                <img class="form-shadow" src="images/bottom-shadow.png" alt=""/>
            </div>
        </div>
    </section>
@endsection


