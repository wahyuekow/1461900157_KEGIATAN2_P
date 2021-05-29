<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class WahyuekoController extends Controller
{
    public function anggota()
    {
        $anggota = DB::table('anggota')->get();
        return view('anggota0157',['anggota' => $anggota]);
    }
    public function home()
    {
        return view('home0157');
    }
}