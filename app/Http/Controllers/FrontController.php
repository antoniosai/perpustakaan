<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;
use App\User;
use App\Information;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    //Area Buku
    public function showAllBuku()
    {

        // return 'woke';
        $buku = Buku::paginate(6);

        return view('frontend.buku.index', [
            'buku' => $buku
        ]);
    }

    public function detailBuku($slug)
    {
        $buku = Buku::where('slug', $slug)->first();

        return view('frontend.buku.detail', [
            'buku' => $buku
        ]);
    }

    //Area Perujuk atau User
    public function showAllUser()
    {
        $user = User::all();

        return view('frontend.perujuk.index', [
            'user' => $user
        ]);
    }

    public function detailUser($id)
    {
        $user = User::findOrFail($id);
        $buku = Buku::where('user_id', $user->id)->get();

        return view('frontend.perujuk.detail', [
            'user' => $user,
            'buku' => $buku
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $buku = Buku::where('title', 'LIKE', '%'.$query.'%')
                ->orWhere('description', 'LIKE', '%'.$query.'%')->get();
        $user = User::where('name', 'LIKE', '%'.$query.'%')->get();
        $informations = Information::where('title', 'LIKE', '%'.$query.'%')
                            ->orWhere('content', 'LIKE', '%'.$query.'%')->get();

        return view('frontend.search', [
            'buku' => $buku,
            'user' => $user,
            'informations' => $informations,
            'query' => $query
        ]);
    }
}
