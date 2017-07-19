@extends('templates.frontend.layout')

@section('title')
Fasilitas
@endsection

@section('content')
<div class="container">
    <h2>Fasilitas</h2>
    <hr>
    {!! $hotel->facilities !!}
</div>
@endsection

@section('custom_styles')
@endsection