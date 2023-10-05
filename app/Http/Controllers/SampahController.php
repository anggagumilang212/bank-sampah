<?php

namespace App\Http\Controllers;

use App\Models\JenisSampah;
use App\Models\Sampah;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function sampah()
    {
        $jenissampah = JenisSampah::all();
        $sampah = Sampah::all();
        return view('home', compact('jenissampah', 'sampah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_jenis_sampah' => 'required',
            'jumlah' => 'required|numeric|max:10',
        ], [
            'jumlah.max' => 'Jumlah tidak boleh melebihi 10 Kg.',
        ]);

        Sampah::create([
            'id_jenis_sampah' => $request->id_jenis_sampah,
            'jumlah' => $request->jumlah,

        ]);

        return redirect()->back()->with('success', 'Silahkan Melihat Total');
    }

    public function delete(Request $request)
    {
        Sampah::where('id', $request->id)->delete();
        return redirect()->back()->with('success', 'Berhasil Di Hapus');
    }
}
