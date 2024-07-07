<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ArtikelModel;
use App\Models\admin\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd("masuk");
        $data = ArtikelModel::with('kategoris')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('deskripsi', function ($row) {
                    $datalimit =  \Illuminate\Support\Str::words($row->deskripsi, 30, '...');
                    // $datalimit =  \Illuminate\Support\Str::of($row->deskripsi)->limit(100);
                    // $final = $datalimit . '....';
                    return $datalimit;
                })
                ->addColumn('action', function ($data) {
                    $btn = '<a href="#" onclick="deleteFile(event,' . $data->id . ')"><span class="tf-icons bx bx-trash-alt"></span></a>
                <a href="' . route('admin.data-artikel.show', $data->id) . '"><span class="tf-icons bx bx-show"></span></a><a href="' . route('admin.data-artikel.edit', $data->id) . '"><span class="tf-icons bx bx-edit-alt"></span></a>';
                    return $btn;
                })
                ->rawColumns(['action', 'deskripsi'])
                ->make(true);
        }
        return view('admin.artikel.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataKategori = KategoriModel::all();
        // dd($dataKategori);
        return view('admin.artikel.create', ['dataKategori' => $dataKategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $file = $request->file('gambar');
        $tujuan_upload = 'imageArtikel';
        $filename =  $file->getClientOriginalName();
        $file->move($tujuan_upload, $filename);

        $data = [
            'kategori_id' => $request->kategori,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $filename,
        ];
        $simpan = ArtikelModel::create($data);
        if ($simpan) {
            return redirect(route('admin.data-artikel.index'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = ArtikelModel::with(['kategoris'])->find($id);
        // dd($data);
        return view('admin.artikel.show', ['dataArtikel' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $kategori = KategoriModel::all();
        $data = ArtikelModel::with(['kategoris'])->find($id);
        return view('admin.artikel.edit', ['data' => $data, 'dataKategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $cekdata = ArtikelModel::find($request->idArtikel);
        $data = $request->all();
        $file = $request->file('filename');

        if ($request->file('filename')) {
            $tujuan_upload = 'imageArtikel';

            if (File::exists(public_path("imageArtikel/" . $cekdata->image))) {
                // dd("file gambar sudah ada");
                File::delete(public_path("imageArtikel/" . $file->getClientOriginalName()));
            }
            $file->move($tujuan_upload, $file->getClientOriginalName());
            $data['filename'] = $file->getClientOriginalName();
        }

        $filenameTest = '';
        if ($request->file('filename') == null) {
            $filenameTest = $cekdata->image;
        } else {
            $filenameTest = $file->getClientOriginalName();
        }
        $save = ArtikelModel::where('id', $request->idArtikel)->update(['judul' => $request->judul, 'kategori_id' => $request->kategori, 'image' => $filenameTest, 'deskripsi' => $request->deskripsi]);
        if ($save) {
            return redirect(route('admin.data-artikel.index'));
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $dok = ArtikelModel::find($id);
        $dok->delete();

        return response()->json(['msg' => 'Data berhasil di hapus'], 200);
    }
}
