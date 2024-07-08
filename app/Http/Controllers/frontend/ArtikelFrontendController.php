<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\admin\ArtikelModel;
use App\Models\admin\KategoriModel;
use App\Models\admin\KomentarArtikelModel;
use App\Models\admin\ProfileModel;
use Illuminate\Http\Request;

class ArtikelFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataartikelfooter = ArtikelModel::orderBy('created_at', 'desc')->limit(2)->get();
        $dataartikelunggulan = ArtikelModel::orderBy('created_at', 'desc')->limit(4)->get();
        $dataartikel = ArtikelModel::orderBy('created_at', 'desc')->paginate(9); // Menampilkan 10 artikel per halaman
        $kategori = KategoriModel::all();
        $dataProfile = ProfileModel::first();

        return view('frontend.data-artikel.data-artikel', [
            'kategori' => $kategori,
            'dataartikelfooter' => $dataartikelfooter,
            'dataartikel' => $dataartikel,
            'dataartikelunggulan' => $dataartikelunggulan,
            'dataProfile' => $dataProfile,
        ]);
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
        $data = ArtikelModel::with('kategoris')->find($id);
        // dd($data->jmlh_view);

        if ($data->jmlh_view == null) {
            ArtikelModel::where('id', $id)->update(['jmlh_view' => 1]);
        } else {
            ArtikelModel::where('id', $id)->update(['jmlh_view' => $data->jmlh_view + 1]);
        }
        $dataKomentar = KomentarArtikelModel::where('komentarID', $id)->get();

        // dd($dataKomentar);
        $dataartikelfooter = ArtikelModel::limit(2)->get();
        $kategori = KategoriModel::all();
        return view('dashboard.halaman-artikel.artkel-page-detail', ['data' => $data, 'dataartikelfooter' => $dataartikelfooter, 'kategori' => $kategori, 'datakomentar' => $dataKomentar]);
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
