<?php

namespace App\Http\Controllers;

use App\surat;
use Illuminate\Http\Request;

class BrokenController extends Controller
{
    public function index()
    {
        $srt = surat::all();
        return view ('suratmasuk', ['srt' => $srt]);
    }

    public function tambah()
    {
        return view ('tambah');
    }

}
