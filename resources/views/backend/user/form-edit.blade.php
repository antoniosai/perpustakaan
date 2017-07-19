<!-- Modal -->
<div id="editUser{{$listUser->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin.user.edit.post') }}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{$listUser->id}}">
            <div class="form-group">
                <label>Nama User</label>
                <input type="text" name="name" value="{{$listUser->name}}" class="form-control" placeholder="Nama User" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="{{$listUser->username}}" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="phone" value="{{$listUser->phone}}" class="form-control" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" name="email" value="{{$listUser->email}}" class="form-control" placeholder="Alamat Email" required>
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
                        <input type="password" name="password" class="form-control" placeholder="Password Baru">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password">
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