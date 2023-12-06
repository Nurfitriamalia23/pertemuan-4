<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halaman extends Controller
{
    function index()
    {
        return view("halaman/index");
    }
    function tentang()
    {
        return view("halaman/tentang");
    }
    function kontak()
    {
        $data = [
            'judul' ='Ini Adalah Halaman Kontak',
            'kontak' => [
                'email' => 'neng08521@gmail.com',
                'youtube' => 'nurfitriamalia'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
}
