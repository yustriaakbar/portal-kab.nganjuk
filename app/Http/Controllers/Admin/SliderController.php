<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use File;
use Session;
use DataTables;
use DB;

class SliderController extends Controller
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
        $slider = Slider::orderBy('id','DESC')->get();
        return view('admin/slider',compact('slider', 'foto_profil'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $nama  = time()."_".$foto->getClientOriginalName();
            $lokasi = public_path('/images/slider');
            $foto->move($lokasi,$nama);
            Slider::updateOrCreate(
                ['id' => $request->data_id],[
                'foto' => $nama
            ]);        
        
        }              
        //Session::flash('sukses','Data Berhasi Di Tambahkan');
        return redirect('/slider');
    }

    public function destroy($id)
    {
        // hapus file
        $gambar = Slider::where('id',$id)->first();
        File::delete('images/slider/'.$gambar->foto);
 

        Slider::find($id)->delete();
        //Session::flash('sukses','Data Berhasi Di Hapus');
        return redirect('/slider');
    }

}
