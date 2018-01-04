@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Forgot password?</h1>
                    <form action="{{route('password.email')}}" method="POST" role="form">
                        {{csrf_field()}}
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
                        <div class="control">
                            <input type="submit" class="button is-primary is-outlined is-fullwidth m-t-30" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5 class="has-text-centered">
                        <a class="is-muted" href="{{route('login')}}">
                            Go back to login
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
{{--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
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
