@extends('templates.frontend.layout')

@section('title')
Detail Perujuk {{ $user->name }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-9 col-md-9">
                    <table class="table table-striped table-hovered">
                        <tr>
                            <td rowspan="3" style="width:130px">
                                <figure>
                                    <img src="{{ asset('images/gender/wanita.png')}}" style="height: 120px; width: 120px">
                                </figure>
                            </td>
                            <td>Name</td>
                            <td><strong>{{ $user->name }}</strong></td>
                        </tr>
                        <tr>
                            <td style="width: 150px">Tanggal Aktif</td>
                            <td>{{ $user->created_at->format('d M Y') }}</td>
                        </tr>
                        <tr>
                            <td>Buku Rujukan</td>
                            <td>{{ count($user->buku) }} buku</td>
                        </tr>
                    </table>
                    <hr>
                    
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h3>Buku Rujukan</h3>
                @forelse($buku as $ebook)
                <div class="col-sm-12 col-md-4">
                    <center>
                        <div class="thumbnail">
                            <img src="http://it-ebooks.info/images/ebooks/6/nginx.jpg" style="height: 150px">
                        </div>
                        
                        <div class="caption">
                            <h3>{{ $ebook->title }}</h3>
                            <p>Some sample text. Some sample text.</p>
                            
                            <p>
                                <a href="{{ route('home.buku.detail', $ebook->slug) }}" class="btn btn-primary btn-sm btn-block" role="button">Detail</a> 
                            </p>
                            
                        </div>
                    </center>
                </div>
                @empty

                @endforelse
        </div>
    </div>
</div>
@endsection
