<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\KTP;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class KTPByKabupatenController extends Controller
{
    protected $customMessages = [
        'required'              => ':Attribute harus diisi',
        'unique'                => ':Attribute sudah ada.',
        'integer'               => ':Attribute must be a number.',
        'min'                   => ':Attribute harus :min.',
        'max'                   => ':Attribute tidak boleh lebih dari :max karakter.',
        'exists'                => 'Not found.',
        'jenis_kelamin.required' => 'Pilih Jenis Kelamin.',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kabupaten = auth()->user()->kabupaten;
        if (request()->ajax()) {
            return datatables()->of(KTP::where('kabupaten', $kabupaten)->orderBy('updated_at', 'DESC')->get())
                ->addColumn('action', 'admin.ktp-kabupaten.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.ktp-kabupaten.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ktp-kabupaten.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'provinsi'              => 'required|string',
            'nik'                   => 'required|integer|unique:k_t_p_s,nik|min:16',
            'nama'                  => 'required|string',
            'tempat_lahir'          => 'required|string',
            'tanggal_lahir'         => 'required|date',
            'jenis_kelamin'         => 'required|string',
            'alamat'                => 'required|string',
            'rt'                    => 'required|string',
            'rw'                    => 'required|string',
            'desa'                  => 'required|string',
            'kecamatan'             => 'required|string',
            'status_perkawinan'     => 'required|string',
            'keterangan'            => 'nullable|string',
            'photo'                 => 'required',
        ], $this->customMessages);

        $data = new KTP();
        $data->provinsi                 = strip_tags(request()->post('provinsi'));
        $data->kabupaten                = auth()->user()->kabupaten;
        $data->nik                      = strip_tags(request()->post('nik'));
        $data->nama                     = strip_tags(request()->post('nama'));
        $data->tempat_lahir             = strip_tags(request()->post('tempat_lahir'));
        $data->tanggal_lahir            = request()->post('tanggal_lahir');
        $data->jenis_kelamin            = strip_tags(request()->post('jenis_kelamin'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->rt                       = strip_tags(request()->post('rt'));
        $data->rw                       = strip_tags(request()->post('rw'));
        $data->desa                     = strip_tags(request()->post('desa'));
        $data->kecamatan                = strip_tags(request()->post('kecamatan'));
        $data->status_perkawinan        = strip_tags(request()->post('status_perkawinan'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));

        if (request()->hasFile('photo')) {
            $image = request()->file('photo');
            $imageName = rand(1, 99999999999) . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('img/ktp');

            $imageGenerate = Image::make($image->path());
            $imageGenerate->resize(1280, 720)->save($imagePath . '/' . $imageName);

            $data->photo = $imageName;
        } else {
            $data->photo = 'default.jpg';
        }
        $data->save();

        return redirect()->route('admin.ktp-by-kabupaten.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KTP::findOrFail($id);
        return view('admin.ktp-kabupaten.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = KTP::findOrFail($id);

        request()->validate([
            'provinsi'              => 'required|string',
            'nik'                   => 'required|integer|min:16',
            'nama'                  => 'required|string',
            'tempat_lahir'          => 'required|string',
            'tanggal_lahir'         => 'required|date',
            'jenis_kelamin'         => 'required|string',
            'alamat'                => 'required|string',
            'rt'                    => 'required|string',
            'rw'                    => 'required|string',
            'desa'                  => 'required|string',
            'kecamatan'             => 'required|string',
            'status_perkawinan'     => 'required|string',
            'keterangan'            => 'nullable|string',
            'photo'                 => 'nullable',
        ], $this->customMessages);

        $data->provinsi                 = strip_tags(request()->post('provinsi'));
        $data->kabupaten                = auth()->user()->kabupaten;
        $data->nik                      = strip_tags(request()->post('nik'));
        $data->nama                     = strip_tags(request()->post('nama'));
        $data->tempat_lahir             = strip_tags(request()->post('tempat_lahir'));
        $data->tanggal_lahir            = request()->post('tanggal_lahir');
        $data->jenis_kelamin            = strip_tags(request()->post('jenis_kelamin'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->rt                       = strip_tags(request()->post('rt'));
        $data->rw                       = strip_tags(request()->post('rw'));
        $data->desa                     = strip_tags(request()->post('desa'));
        $data->kecamatan                = strip_tags(request()->post('kecamatan'));
        $data->status_perkawinan        = strip_tags(request()->post('status_perkawinan'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));

        if (request()->hasFile('photo')) {
            if ($data->photo <> 'default.jpg') {
                $fileName = public_path() . '/img/ktp/' . $data->photo;
                File::delete($fileName);
            }

            $image = request()->file('photo');
            $imageName = rand(1, 99999999999) . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('img/ktp');

            $imageGenerate = Image::make($image->path());
            $imageGenerate->resize(1280, 720)->save($imagePath . '/' . $imageName);

            $data->photo = $imageName;
        }
        $data->save();

        return redirect()->route('admin.ktp-by-kabupaten.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = KTP::findOrFail($id);

        if ($item->photo <> 'default.jpg') {
            $fileName2 = public_path() . '/img/ktp/' . $item->photo;
            File::delete($fileName2);
        }

        $itemDelete = $item->delete();

        return response()->json($itemDelete);
    }
}
