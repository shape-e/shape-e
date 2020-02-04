@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-5">
            <div class="">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <input id="name" type="text" style="height: 60px!important;" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" style="height: 60px!important;" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" style="height: 60px!important;" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" style="height: 60px!important;" class="form-control"  name="password_confirmation" placeholder="Repetir contraseña" required>
                            </div>
                        </div>

                        <div class="form-group  row mb-0">
                            <div class="col-md-12">
                                <button type="submit" style="background-color: #4f2ed1;color:#ffffff;" class="btn w-100">
                                    {{ __('Registrame') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
