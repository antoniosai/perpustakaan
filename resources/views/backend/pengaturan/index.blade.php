@extends('templates.backend.layout')

@section('title')
Pengaturan
@endsection

@section('content')
<form action="{!! route('admin.info.save') !!}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama Perpustakaan</label>
        <input type="text" name="name" class="form-control" @if($info) value="{{ $info->name }}" @endif required placeholder="Nama Perpustakaan">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" @if($info) value="{{ $info->email }}" @endif placeholder="Nama Perpustakaan">
    </div>
    <div class="form-group">
        <textarea name="description" id="" cols="30" rows="4" class="form-control">
            @if($info){{ $info->description }}@endif
        </textarea>
    </div>
    <div class="clearfix">
        <button class="btn btn-success btn-block">Simpan</button>
    </div>
</form>

@endsection
