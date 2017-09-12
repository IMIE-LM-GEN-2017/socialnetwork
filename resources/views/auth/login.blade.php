@extends('templates.register')

@section('content')
    <section id="banner">
        <div class="container">

            <div class="sign-up-form">
                <h1 style="color:#fff">CONNEXION</h1>
                <br>
                <br>
                <div class="line-divider"></div>
                <div class="form-wrapper">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="situation">Votre adresse mail:</label>
                            <input type="email" class="form-control" value="{{old('email')}}"
                                   placeholder="adresse@mail.com" name="email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </fieldset>

                        <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="situation">Mot de passe:</label>
                            <input type="password" class="form-control" id="example-password"
                                   name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </fieldset>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                            </label>
                        </div>

                        <br>
                        <input type="submit" class="btn-secondary" value="Connexion">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Mot de passe oublié?
                        </a>
                    </form><br>
                </div>
                <a href="{!! route('register') !!}">Vous n'avez pas encore de compte? <br> Inscrivez-vous!</a>
                <img class="form-shadow" src="images/bottom-shadow.png" alt=""/>
            </div>
        </div>
    </section>

@endsection


