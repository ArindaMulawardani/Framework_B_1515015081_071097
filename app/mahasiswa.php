<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    public function JadwalMataKuliah()
    {
    	return $this->hasMany(JadwalMataKuliah::class);
    }
    public function Pengguna()
	{
	return $this->belongsTo(Pengguna::class);
	}
	
    // protected $fillable = ['nama','nim','alamat','pengguna_id'];

    


}
