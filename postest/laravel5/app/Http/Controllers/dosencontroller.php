<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class  dosencontroller extends Controller
{
    public function awal()
    {
    		return "Data Dosen LUL";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'elbourne';
    	$dosen->nip = 'skadoosh';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data dengan nama {$dosen->nama} telah disimpan 4Head";
    }
}