<?php

namespace App\Http\Controllers;

use App\Models\Trasanction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        $transaksi = Trasanction::all();
        $no = 1;
        $role = ["admin","onwer"];
        if($user->role == in_array($user->role,$role)){
            return view('laporan', ['tables' => $transaksi, 'no' => $no]);
        }
        return redirect('login')->with('error', 'Halaman Hanya Untuk Admin dan Onwer!');    
    }
}
