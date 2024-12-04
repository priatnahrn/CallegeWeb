<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    public function index()
    {
        $lowongans = Lowongan::all();
        return view('lowongan', compact('lowongans'));
    }

    public function showLandingPage()
    {
        // Mengambil 3 lowongan terbaru berdasarkan tanggal terbaru (urutkan dengan created_at)
        $lowongans = Lowongan::latest()->take(3)->get();

        return view('landingpage', compact('lowongans'));
    }

    

    public function show($id)
    {
        $lowongan = Lowongan::find($id);
        if ($lowongan) {
            return view('lowongans.show', compact('lowongan'));
        }
        return redirect()->route('lowongans.index')->with('error', 'Lowongan not found');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_pekerjaan' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'gaji' => 'nullable|string|max:255',
            'kategori' => 'required|in:IT,Finance,Marketing,Lainnya',
            'jenis_pekerjaan' => 'required|in:Full-time,Part-time,Magang',
            'syarat' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        Lowongan::create([
            'nama' => $request->nama_pekerjaan,
            'lokasi' => $request->lokasi,
            'gaji' => $request->gaji,
            'kategori' => $request->kategori,
            'jenis_lowongan' => $request->jenis_pekerjaan,
            'syarat_ketentuan' => $request->syarat,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboard')->with('success', 'Lowongan pekerjaan berhasil dibuat');
    }
    

    public function update(Request $request, $id)
    {
        $lowongan = Lowongan::find($id);
        if ($lowongan) {
            $lowongan->update($request->all());
            return redirect()->route('lowongans.show', $lowongan->id)->with('success', 'Lowongan updated successfully');
        }
        return redirect()->route('lowongans.index')->with('error', 'Lowongan not found');
    }
    

    public function destroy($id)
    {
        $lowongan = Lowongan::find($id);
        if ($lowongan) {
            $lowongan->delete();
            return redirect()->route('lowongans.index')->with('success', 'Lowongan deleted successfully');
        }
        return redirect()->route('lowongans.index')->with('error', 'Lowongan not found');
    }

    public function search(Request $request)
    {
        $query = Lowongan::query();

        // Periksa apakah ada parameter 'search' dalam request
        if ($request->has('search') && $request->search) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('deskripsi', 'like', '%' . $request->search . '%')
                ->orWhere('lokasi', 'like', '%' . $request->search . '%');
        }

        $lowongans = $query->get();
        return view('lowongans.index', compact('lowongans'));
    }


}

