<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;

class DashboardController extends Controller
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
        return view('admin.dashboard', compact('foto_profil'));
    }

    public function manajemenuser()
    {
        $foto_profil = DB::table('users')->first();
        return view('admin.manajemenuser', compact('foto_profil'));
    }
    
}
