@extends('templates.backend.layout')

@section('title')
Menu Laporan
@endsection

@section('header')
Menu Laporan
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
    $("#laporan1").dataTable();
  });
</script>
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Menu Laporan</h4>
    <hr>
    <table class="table table-striped table-hover table-condensed" id="laporan1">
        <thead>
            <tr class="info">
                <th>No</th>
                <th>Nama Kamar</th>
                <th>Harga / Malam</th>
                <th>Kapasitas</th>
                <th>Deskripsi</th>
                <th></th>
            `</tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection