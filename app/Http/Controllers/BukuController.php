<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Category;
use Spatie\PdfToImage\Pdf;


class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();

        return view('backend.buku.index', [
            'buku' => $buku
        ]);
    }

    public function getAdd()
    {
        $categories = Category::all();

        return view('backend.buku.add', [
            'categories' => $categories
        ]);
    }

public function postAdd(Request $request)
    {
        $rules = [
            'title' => 'required',
            'file' => 'required|mimes:pdf'
        ];

        $messages = [
            'title.required' => 'Judul harus diisi',
            'file.required' => 'File PDF belum dipilih',
            'file.mimes:pdf' => 'Format harus berupa PDF',
            'harga_khusus.integer' => 'Harga grosir harus berupa nominal (angka)',
            'file.pdf' => 'File harus berformat PDF'
        ];

        $this->validate($request, $rules, $messages);

        $buku = new Buku;
        $buku->title = $request->input('title');
        $buku->slug = str_slug($request->input('title'), '-').rand(00,10);
        $buku->user_id = $request->input('user_id');
        $buku->category()->attach($buku->id, $request->input('category_id'));
        if ($request->hasFile('file')) {
            // return 'oke';
            
            $file = $request->file('file');

//             var_dump($file);
//             $file = 'C:\Users\Antonio Saiful Islam\Downloads\Documents\Doc1.pdf';

//             $pdf = new \Imagick($file.'[0]');


            
// $pdf->setImageFormat('jpg');
// header('Content-Type: image/jpeg');


            // return $pdf->getNumberOfPages();
            // return $buku->pages = $pdf->imagick->getNumberImages();
            
            $buku->url = $file->getClientOriginalName();
            $buku->filesize = $file->getSize();
            $buku->mime = $file->getMimeType();
            
            $destinationPath = 'uploads/pdf';
            $file->move($destinationPath,$file->getClientOriginalName());
        }
        if ($buku->save()) {
            $request->session()->flash('alert-success', 'Berhasil menambahkan buku '.$buku->title);
            return redirect()->to('admin/buku');
        }
    }

    public function getEdit($id)
    {
        $buku = Buku::findOrFail($id);

        return view('backend.buku.edit', [
            'buku' => $buku
        ]);
    }

    public function postEdit(Request $request)
    {
        return $request->all();

        $buku = Buku::findOrFail($request->input('id'));
        $buku->user_id = $request->input('user_id');
        $buku->title = $request->input('title');
        $buku->title = $request->input('title');
        $buku->title = $request->input('title');
        $buku->title = $request->input('title');
        $buku->title = $request->input('title');

        if ($buku->save()) {
            return redirect()->back()->with('successMessage', 'Berhasil mengupdate buku'. $buku->title);
        }
    }
    

    public function delete($id)
    {
        $buku = Buku::findOrFail($id);

        if ($buku->delete()) {
            return redirect()->back()->with('successMessage', 'Berhasil menghapus buku');
        }
    }
}
