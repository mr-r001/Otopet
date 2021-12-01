<?php

namespace App\Http\Controllers;

use App\Models\KTP;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            return $next($request);
        })->except(['index']);
    }

    protected $customMessages = [
        'required' => 'Please input the :attribute.',
        'unique' => 'This :attribute has already been taken.',
        'integer' => ':Attribute must be a number.',
        'min' => ':Attribute must be at least :min.',
        'max' => ':Attribute may not be more than :max characters.',
        'profile_url.max' => ':Attribute size may not be more than :max kb.',
        'exists' => 'Not found.',
        'sn.required' => 'Please input Serial Number',
        'gender.required' => 'Please select "Male" or "Female".',
        'disabled.required' => 'Please select "Yes" or "No".',
        'role_id.required' => 'Please select Role.',
    ];

    public function dashboard()
    {
        $nabire     = KTP::where('kabupaten', 'Nabire')->orderBy('updated_at', 'DESC')->get();
        $dogiyai    = KTP::where('kabupaten', 'Dogiyai')->orderBy('updated_at', 'DESC')->get();
        $deiyai     = KTP::where('kabupaten', 'Deiyai')->orderBy('updated_at', 'DESC')->get();
        $paniai     = KTP::where('kabupaten', 'Paniai')->orderBy('updated_at', 'DESC')->get();
        $intan      = KTP::where('kabupaten', 'Intan Jaya')->orderBy('updated_at', 'DESC')->get();
        $mimika     = KTP::where('kabupaten', 'Mimika')->orderBy('updated_at', 'DESC')->get();
        return view('admin.dashboard', compact('nabire', 'dogiyai', 'deiyai', 'paniai', 'intan', 'mimika'));
    }
}
