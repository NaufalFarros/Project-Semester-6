<?php

namespace App\Http\Controllers;

use App\Models\donasi;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = donasi::get();
        return view('User.halaman.donate', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = donasi::select('id', $id)->first();
        return view('User.halaman.donation-detail', $data);
    }
}
