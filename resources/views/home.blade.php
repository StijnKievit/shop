<?php
        use App\Helpers\FormHelper;
        ?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                {!! FormHelper::openForm() !!}
                {!! FormHelper::TextField('name', 'please fill in a name', array('class' => 'my custom class', 'placeholder' => 'this is a custom placeholder')) !!}
                {!! FormHelper::TextArea('textarea', 'textarea', []) !!}
                {!! FormHelper::Password('password', 'password', []) !!}

                {!! FormHelper::Radio('password', 'password', []) !!}
                {!! FormHelper::Checkbox('password', 'password', []) !!}
                {!! FormHelper::Password('password', 'password', []) !!}
                {!! FormHelper::Buttons(array(
                    [   'type' =>  'submit',
                        'value' =>  'Opslaan',
                        'label' =>  'Opslaan',
                        'options'    =>  ['class' => 'is-link']],
                    [   'type' =>  'reset',
                        'value' =>  'Reset',
                        'label' =>  'Reset',
                        'options'    =>  ['class' => 'is-text']]
                ), []) !!}
                {!! FormHelper::Button('submit', 'submit', 'submit', []) !!}




                {!! FormHelper::closeForm() !!}
            </div>
        </div>
    </div>
</div>
@endsection
