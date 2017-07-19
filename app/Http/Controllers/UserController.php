<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Buku;

use Auth;


class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        
        return view('backend.user.index', [
            'user' => $user
        ]);
    }

    public function getAddUser()
    {
        return view('backend.user.add');
    }

    public function postAdd(Request $request)
    {
        // return $request->all();
        if ($request->input('password') != $request->input('password_confirmation')) {
            return redirect()->back()->with('errorMessage', 'Password konfirmasi tidak sama')->withInput();
        }

        $user = new User;
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->password = bcrypt($request->input('password'));
        if ($user->save()) {
            return redirect()->back()->with('successMessage', 'Berhasil menambahkan user '.$user->name);
        }
    }

    public function postEdit(Request $request)
    {

        // return $request->all();

        if ($request->input('password')) {
            if ($request->input('password') != $request->input('password_confirmation')) {
                return redirect()->back()->with('errorMessage', 'Password konfirmasi tidak sama')->withInput();
            }
        }
    

        $user = User::findOrFail($request->input('id'));
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $user->foto = $file->getClientOriginalName();
            
            $destinationPath = 'uploads/images';
            $file->move($destinationPath,$file->getClientOriginalName());
        }
        
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->password = bcrypt($request->input('password'));
        if ($user->save()) {
            return redirect()->back()->with('successMessage', 'Mengganti profil user '.$user->name);
        }
    }

    public function getEdit($id)
    {
        $user = User::findOrFail($id);
        
        return view('backend.user.edit', [
            'user' => $user
        ]);
    }

    public function showProfile()
    {
        $user = User::findOrFail(Auth::user()->id);
        $buku = Buku::all();
        return view('backend.user.profile', [
            'user' => $user,
            'buku' => $buku            
        ]);
    }

    public function postEditProfile(Request $request)
    {
        if ($request->input('password')) {
            if ($request->input('password') != $request->input('password_confirmation')) {
                return redirect()->back()->with('errorMessage', 'Password konfirmasi tidak sama')->withInput();
            }
        }

        $user = User::findOrFail($request->input('id'));
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->password = bcrypt($request->input('password'));

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $buku->file = $file->getClientOriginalName();

            $destinationPath = 'uploads/images/users';
            $file->move($destinationPath,$file->getClientOriginalName());
        }


        if ($user->save()) {
            return redirect()->back()->with('successMessage', 'Mengganti profil user '.$user->name);
        }
    }

    public function keluar(Request $request)
    {
        Auth::logout();

        return redirect()->to('login')->with('successMessage', 'Anda berhasi logout');
    }
}
