@extends('templates.backend.layout')

@section('title')
Menu Dinamis
@endsection

@section('header')
Menu Dinamis
@endsection

@section('custom_styles')</script>
<link href="{!! asset('assets/css/tab.css') !!}" rel="stylesheet">
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#fasilitas" aria-controls="home" role="tab" data-toggle="tab">Fasilitas</a></li>
        <li role="presentation"><a href="#pembayaran" aria-controls="profile" role="tab" data-toggle="tab">Metode Pembayaran</a></li>
        <li role="presentation"><a href="#kontak" aria-controls="profile" role="tab" data-toggle="tab">Kontak</a></li>
        <li role="presentation"><a href="#tentang_kami" aria-controls="profile" role="tab" data-toggle="tab">Tentang Kami</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="fasilitas">
        <br>
            <form action="{!! route('menu.post.fasilitas') !!}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{!! $hotel->id !!}">
                <div class="form-group">
                    <textarea name="facilities" id="facilities" cols="30" rows="10" class="form-control">{!! $hotel->facilities !!}</textarea>
                </div>
                <div class="pull-right clearfix">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="pembayaran">
            <br>
            <form action="{!! route('menu.post.pembayaran') !!}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{!! $hotel->id !!}">
                <div class="form-group">
                    <textarea name="metode" id="metode" cols="30" rows="10" class="form-control">{!! $hotel->pembayaran !!}</textarea>
                </div>
                <div class="pull-right clearfix">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="kontak">
            <br>
            <form action="{!! route('menu.post.kontak') !!}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{!! $hotel->id !!}">
                <div class="form-group">
                    <textarea name="contact_us" id="contact_us" cols="30" rows="10" class="form-control">{!! $hotel->contact_us !!}</textarea>
                </div>
                <div class="pull-right clearfix">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="tentang_kami">
            <br>
            <form action="{!! route('menu.post.tentang') !!}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{!! $hotel->id !!}">
                <div class="form-group">
                    <textarea name="about_us" id="contact_us" cols="30" rows="10" class="form-control">{!! $hotel->about_us !!}</textarea>
                </div>
                <div class="pull-right clearfix">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('custom_scripts')
<script src="{!! asset('ckeditor/ckeditor.js') !!}"></script>
<script type="text/javascript">
    CKEDITOR.replace('facilities');
    CKEDITOR.replace('metode');
    CKEDITOR.replace('contact_us');
    CKEDITOR.replace('about_us');
</script>
@endsection