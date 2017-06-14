@extends('templates.backend.layout')

@section('title')
Managemen User
@endsection

@section('header')
Managemen User
@endsection

@section('content')
<table class="table table-striped table-hover table-condensed" id="member">
    <thead>
        <tr class="info">
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach($user as $listUser)
        <tr>
            <td>{!! $no++ !!}</td>
            <td>{!! $listUser->name !!}</td>
            <td>{!! $listUser->email !!}</td>
            <td>{!! $listUser->updated_at->format('d M Y') !!}</td>
            <td>
                <a href="{{ route('user.edit.get', $listUser->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-lg fa-pencil"></i> Edit User{{$listUser->id}}</a>
                
            </td>
        </tr>
        @endforeach
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
    $("#member").dataTable();
  });
</script>
@endsection

@section('addButton')
<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-lg fa-plus"></i> Tambah User</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin.user.add.post') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
                <label>Nama User</label>
                <input type="text" name="name" class="form-control" placeholder="Nama User" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
            </div>
            <label for="gender">Gender</label>
            <div class="radio">
                <label><input type="radio" value="L" name="gender">Laki-laki</label>
                <label><input type="radio" value="P" name="gender">Perempuan</label>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password Baru" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
                    </div>
                </div>
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