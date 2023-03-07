<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/overview');
    }

    public function about($nama = 'rio', $umur = 20)
    {
        echo "Hi, nama saya adalah $nama. Usia saya $umur tahun";
    }

    public function bout()
    {
        return view('bout.php');
    }

    public function contact()
    {
        return view('contact.php');
    }

    public function DDPO()
    {
        return view('DDPO.php');
    }

    public function Pengalaman_Organisasi()
    {
        return view('Pengalaman_Organisasi.php');
    }

    public function container(){
        return view('container/index.php');
    }
}
