<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\artikel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = artikel::get();

        return view('User.halaman.artikel', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = artikel::select($id)->first();

        return view('User.halaman.artikel-detail', $data);
    }
}
