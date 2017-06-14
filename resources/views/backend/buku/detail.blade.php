@extends('templates.backend.layout')

@section('title')
Managemen User
@endsection

@section('header')
Managemen User
@endsection

@section('custom_styles')


<link href="{!! asset('css/jquery.dataTables.css') !!}" rel="stylesheet">
<link href="{!! asset('css/dataTables.bootstrap.css') !!}" rel="stylesheet">
<link href="{!! asset('css/selectize.css') !!}" rel="stylesheet">
<link href="{!! asset('css/selectize.bootstrap3.css') !!}" rel="stylesheet">
@endsection

@section('custom_scripts')
<script src="{!! asset('datatables/jquery.dataTables.js') !!}"></script>
<script src="{!! asset('datatables/dataTables.bootstrap.js') !!}"></script>
<script type="text/javascript">
  $(function() {
    $("#member").dataTable();
  });
</script>
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Manajemen Kamar
        <div class="pull-right">
            <a href="{!! route('room.get.add') !!}" class="btn btn-success btn-sm"><i class="fa fa-user-plus fa-lg"></i> Tambah Kamar</a>
        </div>
    </h4>
    <hr>
    <table class="table table-striped table-hover table-condensed" id="member">
        <thead>
            <tr class="info">
                <th>No</th>
                <th>Nama Kamar</th>
                <th>Harga / Malam</th>
                <th>Kapasitas</th>
                <th>Deskripsi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($room as $kamar)
            <tr>
                <td>{!! $no++ !!}</td>
                <td><a href="{!! route('room.detail', $kamar->id) !!}">{!! $kamar->room_name !!}</a></td>
                <td>Rp {!! number_format($kamar->price) !!}</td>
                <td>{!! $kamar->capacity !!}</td>
                <td style="width:40%">{!! $kamar->description !!}</td>
                <td>
                    <a href="{!! route('room.detail', $kamar->id) !!}" class="btn btn-xs btn-warning">Edit</a>
                    <a href="" class="btn btn-xs btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection