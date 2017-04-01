<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';

    public function dosen()
    {
		return $this->hasOne(Dosen::class);
	}

	public function mahasiswa()
	{
	return $this->hasOne(Mahasiswa::class);
	}

    
}

