@extends('templates.frontend.layout')

@section('title')
Fasilitas
@endsection

@section('content')
<div class="container">
    <h2>Metode Pembayaran</h2>
    <hr>
    {!! $hotel->pembayaran !!}
</div>
@endsection

@section('custom_styles')
@endsection