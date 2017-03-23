<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
     public function awal()
    {
    		return "Matakuliah sih ini";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->id = 'patin';
    	$matakuliah->title = 'matkul berdasi';
    	$matakuliah->save();
    	return "Data dengan nomer {$matakuliah->id} telah disimpan 4Head";
    }
}
