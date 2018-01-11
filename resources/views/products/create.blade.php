<?php
    $category_1 = new stdClass();
    $category_1->name = 'Ringen';
    $category_1->value = 1;

    $category_2 = new stdClass();
    $category_2->name = 'Armbanden';
    $category_2->value = 2;
?>


@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Section</h1>
            <h2 class="subtitle">
                A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
            </h2>
        </div>
    </section>
    <section class="section">
        <div class="container">
            {!! FormHelper::open('POST', route('products.store')) !!}
            {!! FormHelper::TextField('name', 'Productnaam') !!}
            {!! FormHelper::Currency('price', 'Verkoopbedrag') !!}
            {!! FormHelper::Select('category', 'Product categorie', [$category_1,  $category_2]) !!}
            {!! FormHelper::TextArea('description', 'Product beschrijving') !!}
            {!! FormHelper::Button('submit', 'Opslaan', 'Opslaan', array('class' => 'is-primary')) !!}
            {!! FormHelper::close() !!}
        </div>
    </section>
    @endsection

<?php

?>