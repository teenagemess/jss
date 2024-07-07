<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ProfileModel;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Yajra\DataTables\DataTables;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = ProfileModel::all();
        // dd($data);
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('alamat', function ($row) {
                    $datalimit =  \Illuminate\Support\Str::words($row->alamat, 30, '...');
                    return $datalimit;
                })
                ->addColumn('action', function ($data) {
                    $btn = '<a href="#" onclick="deleteFile(event,' . $data->id . ')"><span class="tf-icons bx bx-trash-alt"></span></a>';
                    return $btn;
                })
                ->rawColumns(['action', 'alamat'])
                ->make(true);
        }
        return view('admin.kontak.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = ProfileModel::create($request->all());
        if ($simpan) {
            return response()->json(['status' => true, 'msg' => 'Data Berhasil Di Input', 'url' => route('admin.data-profile.index')]);
        }
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
        $data = ProfileModel::find($id);
        return view('admin.kontak.edit', ['dataEdit' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $query = ProfileModel::find($id);
        $update = $query->update($request->all());
        if ($update) {
            return response()->json(['status' => true, 'msg' => 'Data Berhasil Di Input', 'url' => route('admin.data-profile.index')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dok = ProfileModel::find($id);
        $dok->delete();

        return response()->json(['msg' => 'Data berhasil di hapus'], 200);
    }
}
