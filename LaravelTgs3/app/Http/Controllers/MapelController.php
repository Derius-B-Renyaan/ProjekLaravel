<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $menu = 'Dashboard';
            $dev = 'Coconut Dev';
            return view('pages.admin.mapel.index', compact('menu', 'dev'));
        }else if(Auth::user()->role == 'siswa'){
            $menu = 'Dashboard';
            $dev = 'Coconut Dev';
            return view('pages.siswa.materi.index', compact('menu', 'dev'));
        }else if(Auth::user()->role == 'guru'){
            $menu = 'Dashboard';
            $dev = 'Coconut Dev';
            return view('pages.guru.materi.index', compact('menu', 'dev'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = 'Dashboard';
        $dev = 'Coconut Dev';
        return view('pages.admin.mapel.create', compact('menu', 'dev'));
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
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        //
    }
}
