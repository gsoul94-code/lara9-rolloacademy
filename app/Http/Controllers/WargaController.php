<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index () {
        $warga = Warga::all();
        return view('warga.index', compact(['warga']));
    }

    public function create () {
        return view('warga.create');
    }

    public function store (request $request) {
        // dd($request->except(['_token'])); // except berfungsi untuk mengabaikan _token agar tidak masuk ke database
        Warga::create($request->except('_token'));
        return redirect('/warga');
    }

    public function edit ($id) {
        $warga = Warga::find($id);
        // dd($warga);
        return view('warga.edit', compact(['warga']));
    }

    public function update (Request $request, $id) {
        $warga = Warga::find($id);
        $warga->update($request->except(['_token']));
        return redirect('/warga');
    }

    public function destroy ($id) {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}
