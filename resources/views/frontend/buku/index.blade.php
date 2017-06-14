@extends('templates.frontend.layout')

@section('title')
Daftar Buku
@endsection

@section('content')
<div class="container">
	<div class="row">
		<h2>Daftar Buku</h2>
        <div class="col-lg-9">
            <input type="search" class="form-control" id="input-search" placeholder="Pencarian Cepat" >
        </div>  
        <br><br>
        <br>
        <div class="searchable-container">
            @forelse($buku as $listBuku)
            <div class="items col-xs-9 col-sm-9 col-md-9 col-lg-9 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <center>
                                <figure>
                                    <img src="http://it-ebooks.info/images/ebooks/6/nginx.jpg" style="height: 160px; width: 140px">
                                </figure>
                            </center>
                        </div>
                        <div class="col-sm-6 col-md-9">
                            <h4><a href="{{ route('home.buku.detail', $listBuku->slug) }}">{{ $listBuku->title }}</a></h4>
                            <p>{{ $listBuku->description }}. <a href="{{ route('home.buku.detail', $listBuku->slug) }}">Selengkapnya</a></p> 
                            <section>
                                <span class="badge badge-info"><i>Perujuk. {{ $listBuku->user->name }}</i></span>
                                <span class="badge badge-success">Uploaded on : {{ $listBuku->created_at->format('d M Y') }}</span>
                            </section>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            @empty
            <div class="text-center">
                <h4>Data Yang Anda Cari Tidak Ditemukan</h4>
            </div>
            @endforelse
        </div>
	</div>
</div>
@endsection

@section('custom_styles')
<style>
.glyphicon-lg
{
    font-size:4em
}
.info-block
{
    border-right:5px solid #E6E6E6;margin-bottom:25px
}
.info-block .square-box
{
    width:100px;min-height:110px;margin-right:22px;text-align:center!important;background-color:#676767;padding:20px 0
}
.info-block.block-info
{
    border-color:#20819e
}
.info-block.block-info .square-box
{
    background-color:#20819e;color:#FFF
}
</style>
@endsection

@section('custom_scripts')
<script>
    $(function() {    
        $('#input-search').on('keyup', function() {
          var rex = new RegExp($(this).val(), 'i');
            $('.searchable-container .items').hide();
            $('.searchable-container .items').filter(function() {
                return rex.test($(this).text());
            }).show();
        });
    });
</script>
@endsection