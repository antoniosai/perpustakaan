@extends('templates.backend.layout')

@section('title')
Edit {{ $user->name }}
@endsection

@section('content')
<div class="col-md-8">
    <form action="{{ route('admin.user.edit.post') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$user->id}}">
        <div class="form-group">
            <label>Nama User</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Nama User" required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" value="{{$user->username}}" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label>Foto Profil</label>
            <input type="file" name="file" class="form-control" placeholder="Upload PDF">
        </div>
        <div class="form-group">
            <label>No Telp</label>
            <input type="text" name="phone" value="{{$user->phone}}" class="form-control" placeholder="Nomor Telepon" required>
        </div>
        <div class="form-group">
            <label>Alamat Email</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Alamat Email" required>
        </div>
        <label for="gender">Gender</label>
        <div class="radio">
            <label><input type="radio" value="L" name="gender" @if($user->gender == 'L') checked="checked" @endif>Laki-laki</label>
            <label><input type="radio" value="P" name="gender" @if($user->gender == 'P') checked="checked" @endif>Perempuan</label>
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

@endsection

