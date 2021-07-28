<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $title = 'Dashboard';
        $user = User::count();
        $mapel = Mapel::count();
        $siswa = Siswa::count();
        return view('admin.index',compact('title','user','mapel','siswa'));
    }
}
