<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MejaController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        $meja = Table::all();
        $no = 1;
        if($user->role == "admin"){
            return view('meja', ['tables' => $meja, 'no' => $no]);
        }
        return redirect('login')->with('error', 'Halaman Hanya Untuk Admin!'); 
    }
    public function indexCreate()
    {
        return view('MejaResources.create');
    }
    public function create(Request $request)
    {
        try {
            Table::create([
                "name" => $request->input('name'),
            ]);
            return redirect('meja');
        } catch (\Throwable $th) {
            return redirect('meja')->with('error', $th->getMessage());
        }
    }
    public function indexEdit($id)
    {
        $meja = Table::find($id);
        return view('MejaResources.edit', ['meja' => $meja]);
    }
    public function edit(Request $request,$id)
    {
        try {
            $meja = Table::find($id);
            $meja->name = $request->input('name');
            $meja->save();
            return redirect('meja');
        } catch (\Throwable $th) {
            return redirect('meja')->with('error', $th->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            Table::find($id)->delete();
            return redirect('meja');
        } catch (\Throwable $th) {
            return redirect('meja')->with('error', $th->getMessage());
        }
    }
}
