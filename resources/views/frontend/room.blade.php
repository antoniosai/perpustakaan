@extends('templates.frontend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <hr>    
            <h3>Daftar Kamar</h3>
            <hr>
            @forelse($room as $kamar)
            <article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                    <img src="http://usbcode.ir/wp-content/uploads/2017/03/bootstrap.jpg">
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4>{{ $kamar->room_name }}</h4>
		                <p>{{ $kamar->description }}</p>
		                <section>
		                    Rp {{ number_format($kamar->price) }}/malam
		                    &nbsp; <i class="fa fa-user fa-lg"></i> Maks. {{ $kamar->capacity}}
		                    &nbsp; Status : Tersedia
		                    <a href="#" class="btn btn-default btn-sm pull-right">Detail ...</a>&nbsp;
		                    <a href="{{ route('book.room', $kamar->id) }}" class="btn btn-success btn-sm pull-right"> Book Now</a>
		                </section>
		            </div>
		        </div>
		    </article>
            <hr>
            @empty
                <div class="text-center">
                    <h4>Data Yang Anda Cari Tidak Ditemukan</h4>
                </div>
            @endforelse
        </div>
        <div class="col-md-3">
            <hr>
            <h3>Filter Pencarian</h3>
            <hr>
            <form action="">
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name="nama_kamar" class="form-control" placeholder="Nama Kamar">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of JumboTron -->
@endsection