<?php
/**
 * Created by PhpStorm.
 * User: stijn
 * Date: 29-12-2017
 * Time: 14:18
 */

?>
@extends('manage.layout.main')
@section('title', 'Create Product')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Nieuw product</h2>
            {!! Form::open(array('route' => 'products.store', 'method' => 'post')) !!}
                <div class="form-group">
                    {{  Form::label('name', 'Product naam:')  }}
                    {{  Form::text('name', null, array('class' => 'form-control'))    }}
                </div>
                <div class="form-group">
                    {{  Form::label('category', 'Product categorie:')   }}
                    {{  Form::select('category', ['1' => 'Sieraden', '2' => 'Gadgets'], null, ['class' => 'form-control', 'placeholder' => 'Selecteer een categorie'])   }}

                </div>
                <div class="form-group">
                    {{  Form::label('color', 'Product kleur:')   }}
                    {{  Form::select('color', ['1' => 'Blue', '2' => 'Green'], null, ['class' => 'form-control', 'placeholder' => 'Selecteer een kleur'])   }}

                </div>
                <div class="form-group">
                    {{  Form::label('price', 'Product prijs:')  }}
                    {{  Form::number('price',  null, ['class' => 'form-control','step' => '0.01'])  }}
                </div>
                <div class="form-group">
                    {{  Form::label('description', 'Product beschrijving:')  }}
                    {{  Form::textarea('description', null, array('class' => 'form-control'))    }}
                </div>
                <div class="form-group">
                    {{  Form::submit('Product toevoegen', array('class' => 'btn btn-success')) }}
                </div>


            {!! Form::close() !!}
        </div>
    </div>
@endsection
