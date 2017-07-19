@extends('templates.backend.layout')

@section('title')
Daftar Booking
@endsection

@section('header')
Daftar Booking
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Manajemen Kamar</h4>
    <hr>
    <table class="table table-striped table-hover table-condensed" id="booking">
        <thead>
            <tr class="info">
                <th>No</th>
                <th>Kode Booking</th>
                <th>Nama Pengunjung</th>
                <th>Kamar</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @forelse($booking as $book)
            <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $book->kd_booking }}</td>
                <td>{{ $book->visitor->name }}</td>
                <td>{{ $book->room->room_name }}</td>
                <td>{{ $book->check_in }}</td>
                <td>{{ $book->check_out }}</td>
                <td>Un-Confirmed</td>
                <td><a href="{{ route('booking.detail', $book->id) }}" class="btn btn-xs btn-info">Detail</a></td>
            </tr>
            @empty
            <tr colspan=5>
                <td><h3>No Data</h3></td>
            </tr>

            @endforelse
        </tbody>
    </table>
</div>
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
    $("#booking").dataTable();
  });
</script>
@endsection