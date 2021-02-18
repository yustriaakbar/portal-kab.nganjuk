<?php

namespace App\Http\Controllers;
use App\Galeri;
use Illuminate\Http\Request;
use DB;
use File;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('landingpage');
    }

    public function beranda()
    {
    	$slider = DB::table('slider')->get();
        $berita = DB::table('news as n')
            ->join('category as c', 'c.id', '=', 'n.id_category')
            ->select('n.id as id','c.name as name', 'n.judul as judul', 'n.isi as isi', 'n.gambar as gambar',  'n.updated_at as tanggal')
            ->get();
        return view('beranda', compact('slider', 'berita'));
    }

    public function bupati()
    {
        return view('bupati');
    }

    public function lambang()
    {
        return view('lambang');
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function visi()
    {
        return view('visi');
    }

    public function lapor()
    {
        return view('lapor');
    }

    public function galeri()
    {
        $foto = Galeri::orderBy('id','DESC')->get();
        return view('galeri',compact('foto'));
    }

    public function berita($id)
    {
        $berita = DB::table('news as n')
            ->join('category as c', 'c.id', '=', 'n.id_category')
            ->select('n.id as id', 'c.name as name', 'n.judul as judul', 'n.gambar as gambar', 'n.isi as isi', 'n.updated_at as tanggal')
            ->where('n.id', $id)
            ->get();        
        return view('berita', compact('berita'));
    }

    public function peta()
    {
        return view('petawilayah');
    }

}
