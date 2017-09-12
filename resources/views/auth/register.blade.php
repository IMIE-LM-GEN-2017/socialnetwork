@extends('templates.register')

@section('content')
    <section id="banner">
        <div class="container">

            <div class="sign-up-form">
                <h1 style="color:#fff">INSCRIPTION</h1>
                <br>
                <br>
                <div class="line-divider"></div>
                <div class="form-wrapper">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <fieldset class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="situation">Votre nom:</label>
                            <input type="text" class="form-control" placeholder="Nom"
                                   name="last_name" value="{{old('last_name')}}">
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="situation">Votre prénom:</label>
                            <input type="text" class="form-control" id="example-name" placeholder="Prénom"
                                   name="first_name" value="{{old('first_name')}}">
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
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
                        <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="situation">Confirmation de mot de passe:</label>
                            <input type="password" class="form-control" id="example-password"
                                   name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group{{ $errors->has('situation') ? ' has-error' : '' }}">
                            <label for="situation">Recherche:</label>
                            <select name="situation" class="form-control" value="{{old('situation')}}">
                                <option value="0">Apprentissage</option>
                                <option value="1">Contrat de professionnalisation</option>
                                <option value="2">Stage</option>
                            </select>
                            @if ($errors->has('situation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('situation') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="situation">Habite à:</label>
                            <input type="text" class="form-control" id="example-name" placeholder="Ville" name="city"
                                   value="{{old('city')}}">
                            @if ($errors->has('city'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                            @endif
                        </fieldset>
                        <br>
                        <p><a href="#">En vous inscrivant, vous acceptez les conditions d'utilisation</a></p>
                        <input type="submit" class="btn-secondary" value="S'inscrire">
                    </form><br>
                </div>
                <a href="{!! route('login') !!}">Vous avez déjà un compte?</a>
                <img class="form-shadow" src="images/bottom-shadow.png" alt=""/>
            </div>
        </div>
    </section>

@endsection


