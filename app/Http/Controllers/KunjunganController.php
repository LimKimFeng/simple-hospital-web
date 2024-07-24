<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Kunjungan;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungan = Kunjungan::with(['pasien', 'dokter'])->get();
        return view('kunjungan.kunjungan', compact('kunjungan'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('kunjungan.create', compact('pasiens', 'dokters'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'idKunjungan' => 'required|string|max:11',
            'idPasien' => 'required|string|max:11',
            'idDokter' => 'required|string|max:11',
            'tanggal' => 'required|date',
            'keluhan' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $kunjungan = new Kunjungan();
            $kunjungan->idKunjungan = $request->idKunjungan;
            $kunjungan->idPasien = $request->idPasien;
            $kunjungan->idDokter = $request->idDokter;
            $kunjungan->tanggal = $request->tanggal;
            $kunjungan->keluhan = $request->keluhan;
            $kunjungan->save();

            return redirect()->route('kunjungan.index');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['failed' => 'Ada yang error: ' . $e->getMessage()]);
        }
    }
    public function edit($idKunjungan)
    {
        $kunjungan = Kunjungan::find($idKunjungan);
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('kunjungan.edit', compact('kunjungan', 'pasiens', 'dokters'));
    }

    public function update(Request $request, $idKunjungan)
    {
        $validator = Validator::make($request->all(), [
            'idPasien' => 'required|string|max:50',
            'idDokter' => 'required|string|max:50',
            'tanggal' => 'required|date',
            'keluhan' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $kunjungan = Kunjungan::find($idKunjungan);
            $kunjungan->update($request->all());

            return redirect()->route('kunjungan.index');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['failed' => 'Ada yang error: ' . $e->getMessage()]);
        }
    }

    public function destroy($idKunjungan)
    {
        try {
            $kunjungan = Kunjungan::find($idKunjungan);
            $kunjungan->delete();

            return redirect()->route('kunjungan.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['failed' => 'Ada yang error: ' . $e->getMessage()]);
        }
    }
}
