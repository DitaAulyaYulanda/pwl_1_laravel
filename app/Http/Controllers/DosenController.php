<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $data = ["Dita", "Aulya", "Yulanda"];
        return view ('dosen', ['nama' => $data]);
    }
}
