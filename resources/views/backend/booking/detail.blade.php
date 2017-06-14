@extends('templates.backend.layout')

@section('title')
Daftar Booking
@endsection

@section('header')
Daftar Booking
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h3 class="title">
        <div class="row">
            <div class="col-md-12">
                Detail Booking<br>
                <small>Kode Booking <b>{{ $booking->kd_booking }}</b> | Status : <b>Un-Confirmed</b></small>    
            </div>
        </div>

    </h3>
    
    <hr>

    <form action="{{ route('booking.pembayaran') }}" method="POST" class="form-inline">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $booking->id }}">

        <input type="hidden" name="room_id" value="{{ $booking->room_id }}">

        <div class="form-group">
            <label>Pembayaran Yang Diterima</label>
            <input type="number" class="form-control" name="bayar" placeholder="500000">
        </div>

        <button type="submit" class="btn btn-success">Ganti</button>
        <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><h5>Sisa Pembayaran : <b>Rp {{ number_format($booking->sisa_pembayaran) }}</b></h5></label>
        </div>
    </form>
    <hr>
    
    
    <div class="row">
        <div class="col-md-6">
            <?php if (App\Pembayaran::where('kd_booking',$booking->kd_booking)->first()){ ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Bayar</th>
                            <th>Sisa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2 Mei 2016</td>
                            <td>Rp 500.000</td>
                            <td>Rp 200.000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2 Mei 2016</td>
                            <td>Rp 500.000</td>
                            <td>Rp 200.000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2 Mei 2016</td>
                            <td>Rp 500.000</td>
                            <td>Rp 200.000</td>
                        </tr>
                    </tbody>
                </table>
            <?php } else { ?>
                <center><h3>Belum Ada Pembayaran</h3></center>
            <?php } ?>
            
        </div>
        <div class="col-md-3">
            <div class="alert alert-info">
                <h3>Data Pribadi</h3>
                <hr>
                Nama : <b>{{ $booking->visitor->name }}</b><br>
                Email : <b>{{ $booking->visitor->email }}</b><br>
                Telephone : <b>{{ $booking->visitor->phone }}</b><br>
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-success">
                <h3>Kamar</h3>
                <hr>
                Nama Kamar : <b>{{ $booking->room->room_name }}</b><br>
                Kapasitas Kamar : <b>{{ $booking->room->capacity }}</b><br>
                Harga Kamar : <b>Rp {{ number_format($booking->room->price) }}</b><br>
            </div>
        </div>
    </div>
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