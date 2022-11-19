<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Request\StoreMahasiswaRequest;
use App\Http\Request\UpdateMahasiswaRequest;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('data', compact(['mahasiswa']));
    }

    public function create()
    {
        return view('input');
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->except(['_token', 'submit']));
        return redirect('/data');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', compact(['mahasiswa']));
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token', 'submit']));
        return redirect('/data');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/data');
    }
}
