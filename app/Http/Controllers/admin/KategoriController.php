<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd("masuk");
        $data = KategoriModel::all();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="#" onclick="deleteFile(event,' . $data->id . ')"><span class="tf-icons bx bx-trash-alt"></span></a>
                <a href="' . route('admin.data-kategori.show', $data->id) . '"><span class="tf-icons bx bx-show"></span></a><a href="' . route('admin.data-kategori.edit', $data->id) . '"><span class="tf-icons bx bx-edit-alt"></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
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
                'kategori' => 'required',
            ],
            [
                'kategori.required' => 'Nama Kategori Tidak Boleh Kosong',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        } else {
            $data = [
                'nama' => $request->kategori
            ];
            $simpan = KategoriModel::create($data);
            if ($simpan) {
                return response()->json(['status' => true, 'msg' => 'Data Berhasil Di Input', 'url' => route('admin.data-kategori.index')]);
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
        $data=KategoriModel::find($id);
        return view('admin.kategori.show',['dataKategori'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=KategoriModel::find($id);
        return view('admin.kategori.edit',['data'=>$data]);
        // dd($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data=$request->all();
        $query = KategoriModel::find($id);
        $save = $query->update(['nama'=>$request->kategori]);
        if ($save) {
            return response()->json(['status'=>true,'msg' => 'Data Berhasil Di Perbaharui', 'url' => route('admin.data-kategori.index')], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dok = KategoriModel::find($id);
        $dok->delete();
        return response()->json(['msg' => 'Data berhasil di hapus']);
    }
}
