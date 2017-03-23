<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah2;

class jadwal_matakuliah2controller extends Controller
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
    	$jadwal_matakuliah2 = new jadwal_matakuliah2();
    	$jadwal_matakuliah2->mahasiswa_id = '1';
    	$jadwal_matakuliah2->ruangan_id = '4';
    	$jadwal_matakuliah2->dosen_matakuliah_id = '1';
    	$jadwal_matakuliah2->save();
    	return "Data dengan nomer {$jadwal_matakuliah2->mahasiswa_id} telah disimpan 4Head";
    }
}
