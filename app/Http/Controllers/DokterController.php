<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokters = Dokter::with('poli')->paginate(5);
        return view('dokter', compact('dokters'));
        // $dokters = Dokter::paginate(5);
        // return view('dokter', [
        //     'dokters' => $dokters
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $polis = Poli::all();
        return view('form.createDokter', compact('polis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->id_poli);
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'id_poli' => 'required|exists:polis,id'
        ]);

        // Pasien diambil dari model
        Dokter::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'id_poli' => $request->id_poli
            // dd('id_poli')
        ]);


        return redirect('/dokter')->with('status', 'Do created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {

        $polis = Poli::all();

    // Pastikan relasi 'poli' ikut dimuat dalam data pasien
        $dokter->load('poli');

    // Kirim data pasien dan poli ke view
        return view('form.editDokter', compact('dokter', 'polis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'id_poli' => 'required|exists:polis,id'
        ]);

        $dokter->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'id_poli' => $request->id_poli

        ]);

        return redirect('/dokter')->with('status', 'Dokter Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        $dokter->delete();

        return redirect('/dokter')->with('status', 'Post deleted successfully.');
    }
}
