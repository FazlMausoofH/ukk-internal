<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Trasanction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        $menu = Menu::all();
        $role = ["admin","pelanggan"];
        if($user->role == in_array($user->role,$role)){
            return view('pesanan', ['menus' => $menu]);
        }
        return redirect('login')->with('error', 'Halaman Hanya Untuk Admin!'); 
    }
    public function create(Request $request)
    {
        $menu = Menu::select('name')->get();
        $idPembeli = Auth::id();
        $Pembeli = User::find($idPembeli);

        $date = 
        Trasanction::create([
            "nama_pelanggan" => $Pembeli->name,
            "nomor_unik" => "1a2ca345sa5",

        ]);
    }
}
