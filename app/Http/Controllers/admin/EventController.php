<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\EventModel;
use App\Models\admin\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd("masuk");
        $data = EventModel::with(['kategoris'])->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('deskripsi', function ($row) {
                    $datalimit =  \Illuminate\Support\Str::words($row->deskripsi, 10, '...');
                    // $datalimit =  \Illuminate\Support\Str::of($row->deskripsi)->limit(100);
                    // $final = $datalimit . '....';
                    return $datalimit;
                })
                ->addColumn('action', function ($data) {
                    $btn = '<a href="#" onclick="deleteFile(event,' . $data->id . ')"><span class="tf-icons bx bx-trash-alt"></span></a>
                <a href="' . route('admin.data-event.show', $data->id) . '"><span class="tf-icons bx bx-show"></span></a><a href="' . route('admin.data-event.edit', $data->id) . '"><span class="tf-icons bx bx-edit-alt"></span></a>';
                    return $btn;
                })
                ->rawColumns(['action', 'deskripsi'])
                ->make(true);
        }
        return view('admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataKategori = KategoriModel::all();
        return view('admin.event.create', ['dataKategori' => $dataKategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $tujuan_upload = 'imageEvent';
        $filename =  $file->getClientOriginalName();
        $file->move($tujuan_upload, $filename);
        // dd($request->all());
        $data = [
            'nama_event' => $request->nama,
            'kategori_id' => $request->kategori,
            'biaya' => $request->biaya,
            'tanggal' => $request->tglmulai,
            'image' => $filename,
            'deskripsi' => $request->deskripsi,
            'tanggal_expired' => $request->tglselesai,
        ];
        $simpan = EventModel::create($data);
        if ($simpan) {
            return redirect(route('admin.data-event.index'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = EventModel::with(['kategoris'])->find($id);
        // dd($data);
        return view('admin.event.show', ['dataEvent' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = EventModel::with(['kategoris'])->find($id);
        $dataKategori = KategoriModel::all();
        // dd($data);
        return view('admin.event.edit', ['dataEvent' => $data, 'dataKategori' => $dataKategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $cekdata = EventModel::find($request->id);
        $data = $request->all();
        $file = $request->file('filename');
        // dd($cekdata);
        // die;

        if ($request->file('filename')) {
            $tujuan_upload = 'imageEvent';

            if (File::exists(public_path("imageEvent/" . $cekdata->image))) {
                // dd("file gambar sudah ada");
                File::delete(public_path("imageEvent/" . $file->getClientOriginalName()));
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
        $save = EventModel::where('id', $request->id)->update([
            'nama_event' => $request->nama,
            'kategori_id' => $request->kategori,
            'tanggal' => $request->tglmulai,
            'tanggal_expired' => $request->tglselesai,
            'biaya' => $request->biaya,
            'image' => $filenameTest,
            'deskripsi' => $request->deskripsi
        ]);
        if ($save) {
            return redirect(route('admin.data-event.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dok = EventModel::find($id);
        $dok->delete();

        return response()->json(['msg' => 'Data berhasil di hapus'], 200);
    }
}
