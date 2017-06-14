@extends('templates.backend.layout')

@section('title')
Dashboard
@endsection

@section('header')
Dashboard
@endsection

@section('custom_styles')
<script src="{!! asset('datatables/jquery.dataTables.js') !!}"></script>
<script src="{!! asset('datatables/dataTables.bootstrap.js') !!}"></script>

<link href="{!! asset('css/jquery.dataTables.css') !!}" rel="stylesheet">
<link href="{!! asset('css/dataTables.bootstrap.css') !!}" rel="stylesheet">
<link href="{!! asset('css/selectize.css') !!}" rel="stylesheet">
<link href="{!! asset('css/selectize.bootstrap3.css') !!}" rel="stylesheet">
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <marquee>
        <h2 class="title">Selamat Datang di Aplikasi Manajemen Hotel</h2>    
    </marquee>
</div>
@endsection