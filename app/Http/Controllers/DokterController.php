<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.dokter', compact('dokter'));
    }

    public function create()
    {
        return view('dokter.create', ['spesialisasi_dokter' => $this->getSpesialisasiDokter()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'idDokter' => 'required|string|max:50',
            'namaDokter' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'nomorTelepon' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $dokter = new Dokter();
            $dokter->idDokter = $request->idDokter;
            $dokter->namaDokter = $request->namaDokter;
            $dokter->spesialis = $request->spesialis;
            $dokter->nomorTelepon = $request->nomorTelepon;
            $dokter->save();

            return redirect()->route('dokter.index');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['failed' => 'Ada yang error: ' . $e->getMessage()]);
        }
    }

    public function edit($idDokter)
    {
        $dokter = Dokter::find($idDokter);
        return view('dokter.edit', compact('dokter'))->with('spesialisasi_dokter', $this->getSpesialisasiDokter());
    }

    public function update(Request $request, $idDokter)
    {
        $request->validate([
            'idDokter' => 'required|string|max:11',
            'namaDokter' => 'required|string|max:100',
            'spesialis' => 'required|string|max:100',
            'nomorTelepon' => 'required|string|max:15',
        ]);

        $dokter = Dokter::find($idDokter);
        $dokter->update($request->all());

        return redirect()->route('dokter.index');
    }

    public function destroy($idDokter)
    {
        $dokter = Dokter::find($idDokter);
        $dokter->delete();

        return redirect()->route('dokter.index');
    }

    private function getSpesialisasiDokter()
    {
        return [
            "Anestesiologi",
            "Kardiologi",
            "Dermatologi",
            "Endokrinologi",
            "Gastroenterologi",
            "Geriatri",
            "Hematologi",
            "Imunologi",
            "Infeksi",
            "Nefrologi",
            "Neurologi",
            "Obstetri dan Ginekologi (OBGYN)",
            "Onkologi",
            "Oftalmologi",
            "Ortopedi",
            "Otolaringologi (THT)",
            "Patologi",
            "Pediatri",
            "Psikiatri",
            "Pulmonologi",
            "Radiologi",
            "Reumatologi",
            "Urologi"
        ];
    }
}
