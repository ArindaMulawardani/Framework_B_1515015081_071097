<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class penggunacontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari penggunacontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    } 
    public function simpan()
    {
    	$pengguna = new pengguna();
    	$pengguna->username = 'Arinda';
    	$pengguna->password = '1515015081';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
    }
}
