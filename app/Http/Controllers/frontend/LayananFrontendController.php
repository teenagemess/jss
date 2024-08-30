<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\admin\ArtikelModel;
use App\Models\admin\EventModel;
use App\Models\admin\KategoriModel;
use App\Models\admin\LayananModel;
use App\Models\admin\ProfileModel;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class LayananFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataartikelfooter = ArtikelModel::limit(2)->get();
        $kategori = KategoriModel::all();
        $datalayananunggulan = LayananModel::orderBy('created_at', 'desc')->limit(9)->get();
        $datalayananall = LayananModel::orderBy('created_at', 'desc')->get();
        $dataProfile = ProfileModel::first();
        return view('frontend.layanan.data-layanan', ['kategori' => $kategori, 'dataartikelfooter' => $dataartikelfooter, 'datalayananunggulan' => $datalayananunggulan, 'datalayananall' => $datalayananall, 'dataProfile' => $dataProfile]);
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
        $dataartikelfooter = ArtikelModel::limit(2)->get();
        $kategori = KategoriModel::all();
        // $datalayananunggulan = LayananModel::limit(9)->get();
        // $datalayananall = LayananModel::all();
        $dataEvent = EventModel::with('kategoris')->find($id);
        return view('dashboard.halaman-event.event-detail', ['dataartikelfooter' => $dataartikelfooter, 'kategori' => $kategori, 'dataEvent' => $dataEvent]);
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
