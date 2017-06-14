@extends('templates.backend.layout')

@section('title')
Edit Buku {{ $buku->title }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <form action="{!! route('admin.buku.edit.post') !!}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{ $buku->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label>Nama Buku</label>
                <input type="text" name="title" class="form-control" value="{{ $buku->title }}" placeholder="Nama Buku">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Upload PDF</label>
                        <input type="file" name="upload" class="form-control" placeholder="Upload PDF">    
                    </div>
                    <div class="col-md-6">
                        <label>URL</label>
                        <input type="text" class="form-control" name="url" placeholder="Masukan Link URL">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ $buku->description }}</textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection


@section('custom_scripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace('description');
</script>
@endsection