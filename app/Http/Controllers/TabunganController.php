<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TabunganController extends Controller
{
    public function index()
    {
        $tabungans = Tabungan::with('menabungs')->where('user_id', Auth::id())->get();
        return view('tabungan.index', compact('tabungans'));
    }

    public function create()
    {
        return view('tabungan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'target_nominal' => 'required|numeric',
            'target_tanggal' => 'required|date',
        ]);

        $fotoName = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/images');
            $fotoName = basename($path);
        }

        Tabungan::create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'foto' => $fotoName,
            'target_nominal' => $request->target_nominal,
            'target_tanggal' => $request->target_tanggal,
        ]);

        return redirect('/')->with('success', 'Tabungan berhasil dibuat.');
    }

    public function edit(Tabungan $tabungan)
    {
        return view('tabungan.edit', compact('tabungan'));
    }

    public function update(Request $request, Tabungan $tabungan)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'target_nominal' => 'required|numeric',
            'target_tanggal' => 'required|date',
        ]);

        $data = $request->only('judul', 'target_nominal', 'target_tanggal');

        if ($request->hasFile('foto')) {
            if ($tabungan->foto) {
                Storage::delete('public/images/' . $tabungan->foto);
            }

            $path = $request->file('foto')->store('public/images');
            $data['foto'] = basename($path);
        }

        $tabungan->update($data);

        return redirect('/')->with('success', 'Tabungan diperbarui.');
    }

    public function destroy(Tabungan $tabungan)
    {
        if ($tabungan->foto) {
            Storage::delete('public/images/' . $tabungan->foto);
        }

        $tabungan->delete();

        return redirect('/')->with('success', 'Tabungan dihapus.');
    }
}
