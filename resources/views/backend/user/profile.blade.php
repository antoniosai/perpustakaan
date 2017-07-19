@extends('templates.backend.layout')

@section('title')
Profil {{ $user->name }}
@endsection


@section('content')
<table class="table table-striped table-hovered">
    <tr>
        <td rowspan="3" style="width:130px">
            <figure>
                @if($user->foto == NULL)
                    @if($user->gender == 'P')
                        <img src="{{ asset('images/gender/wanita.png')}}" style="height: 120px; width: 120px">
                    @else
                        <img src="{{ asset('images/gender/laki.png')}}" style="height: 120px; width: 120px">                        
                    @endif
                @else
                    <img src="{{ asset('uploads/images/'.$user->foto)}}" style="height: 120px; width: 120px">                                            
                @endif
            </figure>
            <a href="{{ route('user.edit.get', $user->id) }}" class="btn btn-xl btn-info btn-block"><i class="fa fa-pencil"></i> Edit Profil</a>
            <br>
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
<h3>Deskripsi</h3>
@forelse($buku as $ebook)
<div class="col-sm-6 col-md-4">
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
@endsection
