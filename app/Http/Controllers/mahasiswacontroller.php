<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;


class mahasiswacontroller extends Controller
{
    public function mahasiswa()
    {
        // $mahasiswa = mahasiswa::all();
        // dd($mahasiswa);
        $mahasiswa = mahasiswa::find(2);
        echo "Nama : ".$mahasiswa->nama;
        echo "<br>";
        echo "Username: ".$mahasiswa->pengguna->username;
    }
    public function awal()
    {
    	return "Hello dari mahasiswa controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Novreza';
    	$mahasiswa->nim = '151503';
    	$mahasiswa->alamat = 'JL. M. Said';
    	$mahasiswa->pengguna_id = '2';
    	$mahasiswa->save();
    	return "data dengan nama {$mahasiswa->nama} telah disimpan";
    }
    // public function mahasiswa()
    // {
    //     echo "Hello Semua Para Fans Setia";
    // }
}
