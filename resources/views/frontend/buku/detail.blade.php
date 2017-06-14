@extends('templates.frontend.layout')

@section('title')
Detail Buku {{ $buku->title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2>{{ $buku->title }}</h2>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <figure>
                        <img src="http://it-ebooks.info/images/ebooks/6/nginx.jpg" style="height: 220px; width: 189px">
                    </figure>
                    <br>
                    <?php 
                        header("Content-disposition: inline; filename=".$buku->url);
                    ?>
                    <a href="{{ asset('uploads/pdf/'.$buku->url) }}" class="btn btn-info btn-block"><i class="fa fa-download fa-lg"></i> Download Buku</a>
                </div>
                <div class="col-sm-6 col-md-9">
                    <table class="table table-striped table-hovered">
                        <tr>
                            <td style="width: 150px">Tanggal Upload</td>
                            <td>{{ $buku->created_at->format('d M Y') }}</td>
                        </tr>
                        <tr>
                            <td>Halaman</td>
                            <td>171</td>
                        </tr>
                        <tr>
                            <td>Ukuran</td>
                            <td>{{ App\Http\Controllers\LibraryController::convertToReadableSize($buku->filesize) }}</td>
                        </tr>
                        <tr>
                            <td>Perujuk</td>
                            <td><a href="{{ route('home.user.detail', $buku->user_id) }}">{{ $user = App\User::findOrFail($buku->user_id)->name }}</a></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>Sistem Informasi, Buku Teks, Basis Data</td>
                        </tr>
                    </table>
                    <hr>
                    <h3>Deskripsi</h3>
                    <p>{{ $buku->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection