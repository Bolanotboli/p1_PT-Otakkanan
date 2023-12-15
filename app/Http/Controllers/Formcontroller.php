<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penawaran_harga;

class Formcontroller extends Controller
{
    //
    public function showForm()
    {
        return view('penawaran_custom');
    }

    /*public function submitForm(Request $request)
    {
        // Validasi data formulir
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telp' => 'required|string|max:20',
            'nama_perusahaan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'website' => 'required|url',
            'referensi_web' => 'required|string',
            'layanan' => 'required|array', // layanan harus berupa array
            'layanan.*' => 'in:layanan1,layanan2,layanan3', // setiap elemen harus valid
        ]);

        dd($request->all());
        // Proses data formulir yang divalidasi
        // ... (Lakukan apa pun yang perlu dilakukan dengan data formulir)
        //return redirect()->back()->with('success', 'Formulir berhasil dikirim!');
    }*/

    public function submitForm(Request $request)
    {
        //dd(with('success', 'Formulir berhasil dikirim!'));
        penawaran_harga::create($request->except('_token'));
        try {
            // Your form submission logic here
    
            return response()->json(['success' => 'Pesanan diproses!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan. Silakan coba lagi.'], 500);
        }
    }
}
