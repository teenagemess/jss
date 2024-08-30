<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\admin\ArtikelModel;
use App\Models\admin\EventModel;
use App\Models\admin\KategoriModel;
use App\Models\admin\ProfileModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataartikelfooter = ArtikelModel::limit(2)->get();
        $resentPost = ArtikelModel::limit(3)->get();
        $kategori = KategoriModel::all();
        $dataArtikel = ArtikelModel::orderBy('created_at', 'desc')->limit(4)->get();
        $dataEvent = EventModel::with('kategoris')->limit(6)->get();
        $dataProfile = ProfileModel::first();
        $data = KategoriModel::first();
        // dd($dataProfile);
        return view('dashboard.home', ['kategori' => $kategori, 'dataartikelfooter' => $dataartikelfooter, 'dataartikel' => $dataArtikel, 'dataEvent' => $dataEvent, 'dataProfile' => $dataProfile, 'data' => $data, 'recentpost' => $resentPost]);
    }
}
