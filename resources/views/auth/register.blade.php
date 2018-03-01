@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
  <div class="header header-filter" style="background-image: url('{{ asset('/img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
          <div class="card card-signup">
            <form class="form" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              <div class="header header-primary text-center">
                <h4>Registro</h4>
                {{-- <div class="social-line">
                  <a href="#pablo" class="btn btn-simple btn-just-icon">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-simple btn-just-icon">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-simple btn-just-icon">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div> --}}
              </div>
              <p class="text-divider">Completa tus datos</p>
              <div class="content">

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">face</i>
                  </span>
                  <input type="text" class="form-control" placeholder="Nombre..." name="name" value="{{ old('name') }}" required autofocus />
                </div>

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">email</i>
                  </span>
                  <input id="email" type="email" placeholder="Email..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required />
                </div>

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                  </span>
                  <input id="password" type="password" placeholder="Contraseña..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                </div>

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                  </span>
                  <input type="password" placeholder="Confirmar Contraseña..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required />
                </div>

              </div>

              <div class="footer text-center">
                <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar Registro</a>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>

  @include('includes.footer')

  </div>
@endsection


{{--
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
</form> --}}
