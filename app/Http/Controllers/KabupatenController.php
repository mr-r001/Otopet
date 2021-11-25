<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    protected $customMessages = [
        'required' => 'Please input the :attribute.',
        'unique' => 'This :attribute has already been taken.',
        'max' => ':Attribute may not be more than :max characters.',
    ];

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Kabupaten::orderBy('name', 'ASC')->get())
                ->addColumn('action', 'admin.kabupaten.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.kabupaten.index');
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|unique:kabupatens,name|max:50',
        ], $this->customMessages);

        $Kabupaten = Kabupaten::create([
            'name' => strip_tags(request()->post('name')),
        ]);

        return response()->json($Kabupaten);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Kabupaten = Kabupaten::findOrFail($id);

        return response()->json($Kabupaten);
    }


    public function update(Request $request, $id)
    {
        $Kabupaten = Kabupaten::findOrFail($id);

        request()->validate([
            'name' => "required|string|unique:kabupatens,name,{$Kabupaten->name},name|max:50",
        ], $this->customMessages);

        $Kabupaten->update([
            'name' => strip_tags(request()->post('name')),
        ]);

        return response()->json($Kabupaten);
    }

    public function destroy($id)
    {
        $Kabupaten = Kabupaten::destroy($id);

        return response()->json($Kabupaten);
    }
}
