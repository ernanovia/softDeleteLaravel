<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    // menampilkan data guru
    public function index()
    {
    	$guru = Guru::All();
    	return view('guru', ['guru' => $guru]);
    }

    // hapus sementara
    public function hapus($id)
    {
            $guru = Guru::find($id);
            $guru->delete();

            return redirect('/guru');
    }

    public function trash()
    {
        //menampilkan data yang dihapus
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }
    
    //restore data
    public function kembalikan($id)
    {
        $guru = Guru::onlyTrashed()->where('id',$id);
        $guru->restore();
        return redirect('/guru/trash');

    }

    //restore all data
    public function kembalikan_semua()
    {
        $guru = Guru::onlyTrashed();
        $guru->restore();

        return redirect('/guru/trash');
    }

    //delete permanent
    public function hapus_permanen($id)
    {
        //delete permanen guru data
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->forceDelete();

        return redirect('/guru/trash');
    }

    //delete permanen all data
    public function hapus_permanen_semua()
    {
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();

        return redirect('/guru/trash');
    }
}
