<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari dosen controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Harry Potter';
    	$dosen->nip = '121202';
    	$dosen->alamat = 'JL. Nin Dulu Aja';
    	$dosen->pengguna_id = '2';
    	$dosen->save();
    	return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
