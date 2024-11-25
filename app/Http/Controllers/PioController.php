<?php

namespace App\Http\Controllers;

use App\Models\Pio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PioController extends Controller implements HasMiddleware
{

    public function index()
    {
        return view('pio.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'required|email|max:255', 
            'akta_kelahiran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'telp' => 'required|string|max:20',
            'faksimili' => 'nullable|string|max:20',
            'alamat' => 'required|string|max:1000',
            'rincian' => 'required|string|max:2000',
            'tujuan_penggunaan' => 'required|string|max:2000',
        ]);
        
        $file_name_ktp = null;
        $file_name_akta = null;

        if ($request->hasFile('ktp')) {
            $file = $request->file('ktp');
            $upload_path = public_path('storage/docs-pio/ktp/');
            $file_name_ktp = 'Ktp_' . Str::slug($request->name) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name_ktp);
        }
        
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $upload_path = public_path('storage/docs-pio/akta/');
            $file_name_akta = 'Akta_' . Str::slug($request->name) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name_akta);
        }


        $pio = Pio::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'ktp' => $file_name_ktp,
            'email' => $request->email,
            'akta_kelahiran' => $file_name_akta,
            'telp' => $request->telp,
            'faksimili' => $request->faksimili ?? null,
            'alamat' => $request->alamat,
            'rincian' => $request->rincian,
            'tujuan_penggunaan' => $request->tujuan_penggunaan,
        ]);

        if($pio){
            return response()->json(['success' => true, 'message' => 'Data Permohonan Berhasil DiKirim Tunggu Konfirmasi Dari Admin']);
        } else {
            return response()->json(['success' => false, 'message' => 'Data Permohonan Gagal Disimpan'])->withInput($pio);
        }

    }

}
