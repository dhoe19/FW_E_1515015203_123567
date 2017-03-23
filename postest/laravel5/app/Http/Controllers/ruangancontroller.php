<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;
class ruangancontroller extends Controller
{
    public function awal()
    {
    		return "Diruangan manakah";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new ruangan();
    	$ruangan->id = 'tes';
    	$ruangan->save();
    	return "Data dengan id {$ruangan->ruangan} telah disimpan 4Head";
    }
}
