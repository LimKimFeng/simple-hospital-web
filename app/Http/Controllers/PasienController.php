<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        
        return view('pasien', compact('pasiens'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'idPasien' => 'required|string|max:50',
            'namaPasien' => 'required|string|max:50',
            'jenis_kelamin' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{
            $pasien = new Pasien();
            $pasien->idPasien = $request->idPasien;
            $pasien->namaPasien = $request->namaPasien;
            $pasien->jenis_kelamin = $request->jenis_kelamin;
            $pasien->alamat = $request->alamat;
            $pasien->save();

            return redirect()->route('pasiens.index');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['failed' => 'Ada yang error: '. $e->getMessage()()]);
        }

    }

    public function edit($idPasien)
    {
        $pasien = Pasien::find($idPasien);
        return view('edit', compact('pasien'));
    }

    public function update(Request $request, $idPasien)
    {
        $request->validate([
            'idPasien' => 'required|string|max:50',
            'namaPasien' => 'required|string|max:50',
            'jenis_kelamin' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        $pasien = Pasien::find($idPasien);
        $pasien->update($request->all());

        return redirect()->route('pasiens.index');
    }

    public function destroy($idPasien)
    {
        $pasien = Pasien::find($idPasien);
        $pasien->delete();

        return redirect()->route('pasiens.index');
    }
}
