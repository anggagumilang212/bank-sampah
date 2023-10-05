<?php

namespace App\Http\Controllers;

use App\Models\JenisSampah;
use Illuminate\Http\Request;

class JenisSampahController extends Controller
{
    public function index()
    {
        $jenissampah = JenisSampah::all();
        return view('admin.datamaster.jenissampah', compact('jenissampah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);
        $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('fotojenissampah/'), $imageName);
        JenisSampah::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $imageName,
        ]);

        return redirect('/admin/jenissampah')->with('success', 'Data Berhasil Di Buat');
    }
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        $imageName = $request->gambarLama;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $image->move(public_path('fotojenissampah/'), $imageName);
        }
        JenisSampah::where('id', $request->id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $imageName,
            'harga' => $request->harga,
        ]);

        return redirect('/admin/jenissampah')->with('success', 'Data Berhasil Di Ubah');
    }

    public function delete(Request $request)
    {
        JenisSampah::where('id', $request->id)->delete();
        return redirect('/admin/jenissampah')->with('success', 'Data Berhasil Di Hapus');
    }
}
