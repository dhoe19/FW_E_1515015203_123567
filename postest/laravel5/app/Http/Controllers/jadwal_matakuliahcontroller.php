<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahcontroller extends Controller
{
    public function awal()
    {
    		return "Jadwal matakuliahnya adalah";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwal_matakuliah = new jadwal_matakuliah();
    	$jadwal_matakuliah->mahasiswa_id = '1';
    	$jadwal_matakuliah->ruangan_id = '4';
    	$jadwal_matakuliah->dosen_matakuliah_id = '1';
    	$jadwal_matakuliah->save();
    	return "Data dengan nomer {$jadwal_matakuliah->mahasiswa_id} telah disimpan 4Head";
    }
}
