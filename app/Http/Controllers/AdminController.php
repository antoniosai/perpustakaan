<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;
use App\User;
use App\Category;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();
        $book = Buku::all();
        $categories = Category::all();

        return view('backend.dashboard', [
            'user' => $user,
            'book' => $book,
            'categories' => $categories
        ]);
    }
}
