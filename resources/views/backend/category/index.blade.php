@extends('templates.backend.layout')

@section('title')
Managemen Kategori
@endsection

@section('content')
<table class="table table-striped table-hover table-condensed" id="kategori">
    <thead>
        <tr class="info">
            <th></th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @forelse($categories as $category)
        <tr>
            <td><center>{!! $no++ !!}</center></td>
            <td><a href="#">{!! $category->name !!}</a></td>
            <td>
                <a href="{{ route('admin.category.edit.get', $category->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-lg fa-pencil"></i> Edit</a>
                <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-lg fa-trash"></i> Hapus</a>
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
    $("#kategori").dataTable();
  });
</script>
@endsection

@section('addButton')
<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-lg fa-plus"></i> Tambah Kategori</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Formulir Tambah Kategori</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin.category.add.post') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
                <label>Nama Kategori Buku</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Kategori" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="4"></textarea>
            </div>
            <div class="clearfix">
                <button type="submit" class="btn btn-success btn-block">Simpan</button>
            </div>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection