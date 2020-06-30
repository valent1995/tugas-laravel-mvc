<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis(Request $r) {
        $nama1 = $r->first_name;
        $nama2 = $r->last_name;
        $nama = $nama1 . ' ' . $nama2;
        return view('welcome')->with('nama',$nama);
    }
}
