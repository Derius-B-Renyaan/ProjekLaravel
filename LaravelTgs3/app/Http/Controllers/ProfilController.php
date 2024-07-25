<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{

    public function updateSiswaPhoto(Request $request, $id)
    {
    $request->validate([
    'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $siswa = Siswa::findOrFail($id);

    if ($request->hasFile('foto')) {
    $file = $request->file('foto');
    $path = $file->store('public/fotos');
    $siswa->foto = Storage::url($path);
    $siswa->save();
    }

    return redirect()->back()->with('success', 'Foto siswa berhasil diunggah');
    }

    public function updateGuruPhoto(Request $request, $id)
    {
    $request->validate([
    'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $guru = Guru::findOrFail($id);

    if ($request->hasFile('foto')) {
    $file = $request->file('foto');
    $path = $file->store('public/fotos');
    $guru->foto = Storage::url($path);
    $guru->save();
    }

    return redirect()->back()->with('success', 'Foto guru berhasil diunggah');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = 'Profile';
        $dev  = 'Coconut Dev';
        return view('pages.admin.profile', compact('menu', 'dev'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
