@extends('templates.backend.layout')

@section('title')
Tambah Buku
@endsection

@section('content')
<form action="{!! route('admin.buku.add.post') !!}" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            {!! csrf_field() !!}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label>Nama Buku</label>
                <input type="text" name="title" class="form-control" placeholder="Nama Buku">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label>Upload PDF</label>
                        <input type="file" name="file" class="form-control" placeholder="Upload PDF">    
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Pilih Kategori</label><br/>
                @foreach($categories as $category)
                    <label><input type="checkbox"  value="{{ $category->id }}" name="category_id[]">{{ $category->name }}</label>
                @endforeach
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Simpan</button>
            </div>
        </div>
    </div>
</form>
@endsection


@section('custom_scripts')
<script src="{!! asset('ckeditor/ckeditor.js') !!}"></script>
<script type="text/javascript">
    CKEDITOR.replace('description');
</script>
@endsection