<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\JenisLayananModel;
use App\Models\admin\LayananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = LayananModel::with(['jenislayanans'])->get();
        // dd($data);
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="#" onclick="deleteFile(event,' . $data->id . ')"><span class="tf-icons bx bx-trash-alt"></span></a>
                <a href="' . route('admin.data-layanan.show', $data->id) . '"><span class="tf-icons bx bx-show"></span></a><a href="' . route('admin.data-layanan.edit', $data->id) . '"><span class="tf-icons bx bx-edit-alt"></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.layanan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jeniLayanan = JenisLayananModel::all();
        // dd($jeniLayanan);
        return view('admin.layanan.create', ['jenisLayanan' => $jeniLayanan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $file = $request->file('gambar');
        $tujuan_upload = 'imageLayanan';
        $filename = date('Ymd') . '-' . $file->getClientOriginalName();
        $file->move($tujuan_upload, $filename);

        $data = [
            'nama_layanan' => $request->nama_layanan,
            'jenis_layanan' => $request->jenisLayanan,
            'deskripsi' => $request->deskripsi,
            'image' => $filename,
        ];
        $simpan = LayananModel::create($data);
        if ($simpan) {
            return redirect(route('admin.data-layanan.index'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = LayananModel::with(['jenislayanans'])->find($id);
        return view('admin.layanan.show', ['dataLayanan' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = LayananModel::with('jenislayanans')->find($id);
        $dataJenisLayanan = JenisLayananModel::all();
        return view('admin.layanan.edit', ['dataLayanan' => $data, 'dataJeniLayanan' => $dataJenisLayanan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // die;
        $cekdata = LayananModel::find($request->id);
        $data = $request->all();
        $file = $request->file('filename');
        // dd($cekdata);
        // die;

        if ($request->file('filename')) {
            $tujuan_upload = 'imageLayanan';

            if (File::exists(public_path("imageLayanan/" . $cekdata->image))) {
                // dd("file gambar sudah ada");
                File::delete(public_path("imageLayanan/" . $file->getClientOriginalName()));
                // $file->move($tujuan_upload, $file->getClientOriginalName());
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
        // dd($filenameTest);
        // die;
        $save = LayananModel::where('id', $request->id)->update([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi' => $request->deskripsi,
            'jenis_layanan' => $request->jenisLayanan,
            'image' => $filenameTest,
        ]);
        if ($save) {
            return redirect(route('admin.data-layanan.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dok = LayananModel::find($id);
        $dok->delete();

        return response()->json(['msg' => 'Data berhasil di hapus'], 200);
    }
}
