@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Sign up</h1>
                    <form action="{{route('register')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="name" class="label">
                                Name
                            </label>
                            <div class="control has-icons-left">
                                <input required type="text" class="input {{$errors->has('name') ? 'is-danger' : ''}}" name="name" id="name" value="{{ old('name') }}" placeholder="name">
                              <span class="icon is-small is-left">
                                  <i class="fa fa-user"></i>
                              </span>
                            </div>
                            @if($errors->has('email'))
                                <p class="help is-danger">
                                    {{$errors->first('email')}}
                                </p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="email" class="label">
                                Email address
                            </label>
                            <div class="control has-icons-left">
                                <input required type="email" class="input {{$errors->has('email') ? 'is-danger' : ''}}" name="email" id="email" value="{{ old('email') }}" placeholder="example@email.com">
                              <span class="icon is-small is-left">
                                  <i class="fa fa-envelope"></i>
                              </span>
                            </div>
                            @if($errors->has('email'))
                                <p class="help is-danger">
                                    {{$errors->first('email')}}
                                </p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="password" class="label">
                                Password
                            </label>
                            <div class="control has-icons-left">
                                <input required type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" name="password" id="password" placeholder="password">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            @if($errors->has('password'))
                                <p class="help is-danger">
                                    {{$errors->first('password')}}
                                </p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="password_confirmation" class="label">
                                Password Confirmation
                            </label>
                            <div class="control has-icons-left">
                                <input required type="password" class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" name="password_confirmation" id="password_confirmation" placeholder="password confirmation">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            @if($errors->has('password_confirmation'))
                                <p class="help is-danger">
                                    {{$errors->first('password_confirmation')}}
                                </p>
                            @endif
                        </div>
                        <div class="control">
                            <input type="submit" value="Register" class="button is-primary is-outlined is-fullwidth m-t-30" />

                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5 class="has-text-centered">
                        <a class="is-muted" href="{{route('login')}}">
                            Already have an account?
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    {{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
