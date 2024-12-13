<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // var = models function
        $pasiens = Pasien::paginate(5);
        return view('pasien', [
            'pasiens' => $pasiens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.createPasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_ktp' => 'required|string|max:1000',
            'no_hp' => 'required|string|max:1000',
        ]);

        // Pasien diambil dari model
        Pasien::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_ktp' => $request->no_ktp,
            'no_hp' => $request->no_hp
        ]);

        return redirect('/pasien')->with('status', 'Pasien created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        
        return view('form.editPasien', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_ktp' => 'required|string|max:1000',
            'no_hp' => 'required|string|max:1000',
        ]);

        $pasien->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_ktp' => $request->no_ktp,
            'no_hp' => $request->no_hp
        ]);

        return redirect('/pasien')->with('status', 'Pasien Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect('/pasien')->with('status', 'Pasien deleted successfully.');
    }
}
