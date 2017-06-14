@extends('templates.frontend.layout')

@section('title')
Fasilitas
@endsection

@section('content')
<div class="container">
    <h2>Tentang Kami</h2>
    <hr>
    {!! $hotel->about_us !!}
</div>
@endsection

@section('custom_styles')
@endsection