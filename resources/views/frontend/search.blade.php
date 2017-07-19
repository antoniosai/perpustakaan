@extends('templates.frontend.layout')

@section('title')
Hasil Pencarian {{ $query }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>
                Hasil Pencarian : <i><u><b>{{ $query }}</b></u></i>
            </h2>
            Pencarian
            <ul> 
            @if(count($buku) == 0) <li>Buku tidak ditemukan</li> @endif
            @if(count($user) == 0) <li>User tidak ditemukan</li> @endif
            @if(count($informations) == 0) <li>Informasi tidak ditemukan</li> @endif
            </ul>
            <hr>
            <div class="row">
                @if(count($buku) > 0)
                <div class="col-md-12" id="buku">
                    <h3>Buku</h3>
                    <hr>
                    @forelse($buku as $listBuku)
                    <div class="items col-md-6 clearfix">
                        <div class="info-block block-info clearfix">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <center>
                                        <figure>
                                            <img src="http://www.zamzar.com/images/filetypes/pdf.png" style="height: 160px; width: 160px">
                                        </figure>
                                    </center>
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4><a href="{{ route('home.buku.detail', $listBuku->slug) }}">{{ $listBuku->title }}</a></h4>
                                    <p style="margin-right: 20px">{{ $listBuku->description }}. <a href="{{ route('home.buku.detail', $listBuku->slug) }}">Selengkapnya</a></p> 
                                    <section>
                                        <span class="badge badge-info"><i>Perujuk. {{ $listBuku->user_id }}</i></span>
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
                @endif
                @if(count($user) > 0)
                <div class="col-md-12" id="perujuk">
                    <h3>Perujuk</h3>
                    <hr>
                    @forelse($user as $perujuk)
                    <div class="items col-md-4 clearfix">
                        <div class="info-block block-info clearfix">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <center>
                                        <figure>
                                            @if($perujuk->foto == NULL)
                                                @if($perujuk->gender == 'P')
                                                    <?php $path = 'images/gender/wanita.png'; ?>
                                                @else
                                                    <?php $path = 'images/gender/laki.png'; ?>                       
                                                @endif
                                            @else
                                                <?php $path = 'uploads/images/'.$perujuk->foto; ?>
                                            @endif
                                            <img src="{{ asset($path) }}" style="height: 120px; width: 120px">     
                                        </figure>
                                    </center>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <h4><a href="{{ route('home.user.detail', $perujuk->id) }}">{{ $perujuk->name }}</a></h4>
                                    <section>
                                        <address>
                                            <a href="mailto:webmaster@example.com">{{ $perujuk->email }}</a><br> 
                                            +62-812-1494-007<br>
                                            <span class="badge badge-info">{{ count($perujuk->buku) }} buku rujukan</span>
                                        </address>
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
                @endif
                @if(count($informations) > 0)
                <div class="col-md-12" id="informasi">
                    <h3>Informasi</h3>
                    <hr>
                    @forelse($informations as $information)
                    <div class="col-md-12" style="margin-left: -15px">
                        <h4><b>{!! $information->title !!} <span class="badge">Posted 11 Jun 2017</span> </b></h4>
                        {!! substr($information->content, 0, 300) !!} <a href="http://pariwisata.dev/information/read/-Example-1---Tarif-Turun-20-61">Readmore</a></p>
                        <hr>
                    </div>
                    @empty
                    <center><h4>Data Yang Anda Cari Tidak Ditemukan</h4></center>
                    @endforelse
                </div>
                @endif
            </div>
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