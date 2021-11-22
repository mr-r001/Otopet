<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $customMessages = [
        'required' => ':Attribute harus di isi.',
        'unique' => 'This :attribute has already been taken.',
        'max' => ':Attribute may not be more than :max characters.',
    ];

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(User::with('role')->whereNotIn('id', [1])->orderBy('updated_at', 'DESC')->get())
                ->addColumn('action', 'admin.users.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $kabupaten  = Kabupaten::orderBy('name')->get();
        return view('admin.users.index', compact('kabupaten'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'      => 'required|string',
            'email'     => 'required|email',
            'kabupaten' => 'required|string',
            'password'  => 'required|string',
        ], $this->customMessages);

        $data = User::create([
            'name'          => strip_tags(request()->post('name')),
            'email'         => strip_tags(request()->post('email')),
            'role_id'       => 2,
            'kabupaten'     => strip_tags(request()->post('kabupaten')),
            'password'      => bcrypt(request()->post('password')),
            'profile_url'   => 'admin.jpg',
        ]);
        return response()->json($data);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);

        return response()->json($data);
    }

    public function update($id)
    {

        request()->validate([
            'name'      => 'required|string',
            'email'     => 'required|email',
            'kabupaten' => 'required|string',
            'password'  => 'nullable|string',
        ], $this->customMessages);

        $data = User::findOrFail($id);

        $data->update([
            'name'          => strip_tags(request()->post('name')),
            'email'         => strip_tags(request()->post('email')),
            'role_id'       => 2,
            'kabupaten'     => request()->post('kabupaten'),
            'password'      => bcrypt(request()->post('password')),
            'profile_url'   => 'admin.jpg',
        ]);

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::destroy($id);

        return response()->json($data);
    }
}
