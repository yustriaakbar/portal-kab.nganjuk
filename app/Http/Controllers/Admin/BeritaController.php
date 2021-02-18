<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Berita;
use Illuminate\Http\Request;
use File;
use Session;
use DataTables;
use DB;

class BeritaController extends Controller
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
    public function index()
    {
        $foto_profil = DB::table('users')->first();
        $berita = DB::table('news as n')
            ->join('category as c', 'c.id', '=', 'n.id_category')
            ->select('n.id as id', 'c.name as name', 'n.judul as judul', 'n.gambar as gambar', 'n.isi as isi', 'n.updated_at as tanggal')
            ->get();
        return view('admin.manajemenberita', compact('foto_profil', 'berita'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('gambar')){
            $foto = $request->file('gambar');
            $nama  = time()."_".$foto->getClientOriginalName();
            $lokasi = public_path('/images/berita');
            $foto->move($lokasi,$nama);
            Berita::updateOrCreate(
                ['id' => $request->data_id],[
                'id_category' => $request->id_category,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'created_at' => $request->tanggal,
                'gambar' => $nama,
            ]);        
        
        }else{
            Berita::updateOrCreate(
                ['id' => $request->data_id],[
                'id_category' => $request->id_category,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'created_at' => $request->tanggal,
                'gambar' => $request->gambar,
            ]);     
        }           
        //Session::flash('sukses','Data Berhasi Di Tambahkan');
        return redirect('/manajemen-berita');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return response()->json($berita);
    }

    public function destroy($id)
    {
        // hapus file
        $gambar = Berita::where('id',$id)->first();
        File::delete('images/berita/'.$gambar->gambar);
 
        Berita::find($id)->delete();
        //Session::flash('sukses','Data Berhasi Di Hapus');
        return redirect('/manajemen-berita');
    }

}
