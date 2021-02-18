<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Galeri;
use Illuminate\Http\Request;
use File;
use Session;
use DataTables;
use DB;

class GaleriController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $foto_profil = DB::table('users')->first();
        $galeri = Galeri::orderBy('id','DESC')->get();
        return view('admin/manajemengaleri',compact('galeri', 'foto_profil'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $nama  = time()."_".$foto->getClientOriginalName();
            $lokasi = public_path('/images/galeri');
            $foto->move($lokasi,$nama);
            Galeri::updateOrCreate(
                ['id' => $request->data_id],[
                'foto' => $nama
            ]);        
        
        }              
        //Session::flash('sukses','Data Berhasi Di Tambahkan');
        return redirect('/manajemen-galeri');
    }

    public function destroy($id)
    {
        // hapus file
        $gambar = Galeri::where('id',$id)->first();
        File::delete('images/galeri/'.$gambar->foto);
 

        Galeri::find($id)->delete();
        //Session::flash('sukses','Data Berhasi Di Hapus');
        return redirect('/manajemen-galeri');
    }

}
