@extends('templates.frontend.layout')

@section('content')
<?php $info = App\Info::all()->first(); ?>

<div class="bg"></div>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-header">
                    <img src="{!! asset('images/logo.png') !!}" class="img-rounded" style="height: 250px; margin-top: -40px">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="page-header">
                    <h2>Selamat Datang di {{ $info->name }}</h2>
                    <h2><small>{{ $info->name }}</small></h2>
                    <hr>
                    <form action="{!! route('search') !!}" method="GET" class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" id="query" name="query" placeholder="Kata kunci pencarian" style="width: 400px">
                        </div>
                        <button type="submit" class="btn btn-default">Cari</button>
                    </form>
                    <div style="padding-top: 20px"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- End of JumboTron -->
@endsection