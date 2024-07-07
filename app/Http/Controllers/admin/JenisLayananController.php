<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\JenisLayananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class JenisLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd("masuk");
        $data = JenisLayananModel::all();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="#" onclick="deleteFile(event,' . $data->id . ')"><span class="tf-icons bx bx-trash-alt"></span></a>
                 <a href="' . route('admin.data-jenis-layanan.show', $data->id) . '"><span class="tf-icons bx bx-show"></span></a><a href="' . route('admin.data-jenis-layanan.edit', $data->id) . '"><span class="tf-icons bx bx-edit-alt"></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.jenis-layanan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenis-layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'jenislayanan' => 'required',
            ],
            [
                'jenislayanan.required' => 'Nama Jenis Layanan Tidak Boleh Kosong',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        } else {
            $data = [
                'jenis_layanan' => $request->jenislayanan
            ];
            $simpan = JenisLayananModel::create($data);
            if ($simpan) {
                return response()->json(['status' => true, 'msg' => 'Data Berhasil Di Input', 'url' => route('admin.data-jenis-layanan.index')]);
            } else {
                return response()->json(['status' => false, 'msg' => 'Data Gagal Di Input']);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = JenisLayananModel::find($id);
        return view('admin.jenis-layanan.show', ['dataJenisLayanan' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = JenisLayananModel::find($id);
        return view('admin.jenis-layanan.edit', ['data' => $data]);
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $query = JenisLayananModel::find($id);
        $save = $query->update(['jenis_layanan' => $request->jeniLayanan]);
        if ($save) {
            return response()->json(['status' => true, 'msg' => 'Data Berhasil Di Perbaharui', 'url' => route('admin.data-jenis-layanan.index')], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dok = JenisLayananModel::find($id);
        $dok->delete();

        return response()->json(['msg' => 'Data berhasil di hapus'], 200);
    }
}
