<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PendaftaranController extends Controller
{
    public function index(): Response
    {
        return response()->view('pendaftaran');
    }
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:students.email',
            'jalur' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama_panggilan' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
            'program_study1' => 'required|string',
            'program_study2' => 'required|string',
        ]);

        $fotoName = null;

        if ($request->hasFile('image')) {
            $fotoName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('uploads/students', $fotoName, 'public');

            if (!$path) {
                return back()->with('error', 'Gambar gagal disimpan');
            }
        }

        Student::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'jalur' => $request->jalur,
            'image' => $fotoName,
            'nama_panggilan' => $request->nama_panggilan,
            'nomor_hp' => $request->nomor_hp,
            'program_study1' => $request->program_study1,
            'program_study2' => $request->program_study2,
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');
    }
}
