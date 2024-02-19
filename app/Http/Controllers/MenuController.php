<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        $menu = Menu::all();
        $no = 1;
        if($user->role == "admin"){
            return view('menu', ['menus' => $menu, 'no' => $no]);
        }
        return redirect('login')->with('error', 'Halaman Hanya Untuk Admin!'); 
    }
    public function indexCreate()
    {
        return view('MenuResources.create');
    }
    public function create(Request $request)
    {
        try {
            Menu::create([
                "name" => $request->input('name'),
                "price" => $request->input('price'),
            ]);
            return redirect('menu');
        } catch (\Throwable $th) {
            return redirect('menu')->with('error', $th->getMessage());
        }
    }
    public function indexEdit($id)
    {
        $menu = Menu::find($id);
        return view('MenuResources.edit', ['menu' => $menu]);
    }
    public function edit(Request $request,$id)
    {
        try {
            $menu = Menu::find($id);
            $menu->name = $request->input('name');
            $menu->price = $request->input('price');
            $menu->save();
            return redirect('menu');
        } catch (\Throwable $th) {
            return redirect('menu')->with('error', $th->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            Menu::find($id)->delete();
            return redirect('menu');
        } catch (\Throwable $th) {
            return redirect('menu')->with('error', $th->getMessage());
        }
    }
}
