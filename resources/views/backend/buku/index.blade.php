@extends('templates.backend.layout')

@section('title')
Managemen Buku
@endsection

@section('addButton')
<a href="{{ route('admin.buku.add.get') }}" class="btn btn-success btn-sm"><i class="fa fa-plus fa-lg"></i> Tambah Buku</a>
@endsection

@section('content')
<table class="table table-striped table-hover table-condensed" id="buku">
    <thead>
        <tr class="info">
            <th></th>
            <th>Judul Buku</th>
            <th>Perujuk</th>
            <td>Tipe</td>
            <th>Tanggal Upload</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @forelse($buku as $listBuku)
        <tr>
            <td><center>{!! $no++ !!}</center></td>
            <td><a href="#">{!! $listBuku->title !!}</a></td>
            <td>{{ $listBuku->user->name }}</td>
            <td>
                @if($listBuku->type == 'download')
                    Direct Download
                @else
                    External Link
                @endif
            </td>
            <td>{!! $listBuku->created_at->format('d M Y') !!}</td>
            <td>
                <a href="{{ route('admin.buku.edit.get', $listBuku->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-lg fa-pencil"></i> Edit</a>
                <a href="{{ route('admin.buku.delete', $listBuku->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-lg fa-trash"></i> Hapus</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5"><center><h3>Maaf, tidak ada data tersedia</h3></center></td>
        </tr>
        @endforelse
    </tbody>
</table>
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
    $("#buku").dataTable();
  });
</script>
@endsection

