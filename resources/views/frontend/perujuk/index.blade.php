@extends('templates.frontend.layout')

@section('title')
Perujuk
@endsection

@section('content')
<div class="container">


	<div class="row">
		<h2>Daftar Perujuk</h2>
        <div class="col-lg-8">
            <input type="search" class="form-control" id="input-search" placeholder="Pencarian Cepat" >
        </div>  
        <br><br>
        <br>
        <div class="searchable-container">
            @forelse($user as $perujuk)
            <div class="items col-md-4 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5">
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
                            </div>
                            <div class="col-md-6">
                                <h4><a href="{{ route('home.user.detail', $perujuk->id) }}"><strong>{{ $perujuk->name }}</strong></a></h4> 
                                <address>
                                    <a href="mailto:webmaster@example.com">{{ $perujuk->email }}</a>.<br> 
                                    +62-812-1494-007<br>
                                    <span class="badge badge-info">{{ count($perujuk->buku) }} buku rujukan</span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
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