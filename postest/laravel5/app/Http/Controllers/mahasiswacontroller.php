<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class  mahasiswacontroller extends Controller
{
    public function awal()
    {
    		return "Mahasiswa ini wa";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'elbourne';
    	$mahasiswa->nim = 'skadoosh';
    	$mahasiswa->pengguna_id = '2';
    	$mahasiswa->save();
    	return "Data dengan nama {$mahasiswa->nama} telah disimpan 4Head";
    }
}