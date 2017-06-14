<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Info;

class InfoController extends Controller
{
    public function index()
    {
        $info = Info::all()->first();

        return view('backend.pengaturan.index', [
            'info' => $info
        ]);
    }

    public function postSave(Request $request)
    {
        $info = Info::all()->first();
        $info->name = $request->input('name');
        $info->email = $request->input('email');
        $info->description = $request->input('description');
        if ($info->save()) {
            return redirect()->back()->with('successMessage', 'Berhasil menyimpan pengaturan');
        }
    }
}
