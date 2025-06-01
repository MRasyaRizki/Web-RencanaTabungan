<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menabung;
use App\Models\Tabungan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

    class MenabungController extends Controller
    {
        public function create()
        {
            $tabungans = Tabungan::where('user_id', Auth::id())->get();
            return view('menabung.create', compact('tabungans'));
        }

    public function store(Request $request)
    {
        $request->validate([
            'tabungan_id' => 'required|exists:tabungans,id',
            'nominal' => 'required|numeric|min:1',
        ]);

        $menabung = new Menabung();
        $menabung->tabungan_id = $request->tabungan_id;
        $menabung->nominal = $request->nominal;
        $menabung->tanggal = Carbon::today()->toDateString();
        $menabung->save();

        return redirect()->route('tabungan.index')->with('success', 'Berhasil menabung!');
    }

}
