<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\admin\ArtikelModel;
use App\Models\admin\KategoriModel;
use App\Models\admin\ProfileModel;
use Illuminate\Http\Request;

class KontakFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataartikelfooter = ArtikelModel::limit(2)->get();
        $kategori = KategoriModel::all();
        $dataProfile = ProfileModel::first();
        return view('frontend.kontak.data-kontak', ['kategori' => $kategori, 'dataartikelfooter' => $dataartikelfooter, 'dataProfile' => $dataProfile]);
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
