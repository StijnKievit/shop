@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Category</h1>
            <h2 class="subtitle">
               Creeër een nieuwe category.
            </h2>
        </div>
    </section>
    <section class="section">
        <div class="container">
            {!! FormHelper::open('POST', route('categories.store')) !!}
            {!! FormHelper::TextField('name', 'Categorie naam') !!}
            {!! FormHelper::TextField('slug', 'Slug') !!}
            {!! FormHelper::Select('parent_category', 'Product categorie', $categories) !!}
            {!! FormHelper::TextArea('description', 'Categorie beschrijving') !!}
            {!! FormHelper::Button('submit', 'Opslaan', 'Opslaan', array('class' => 'is-primary')) !!}
            {!! FormHelper::close() !!}
        </div>
    </section>
@endsection