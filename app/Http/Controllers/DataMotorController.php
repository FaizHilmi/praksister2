<?php

namespace App\Http\Controllers;

use App\Models\DataMotor;
use Illuminate\Http\Request;

class DataMotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataMotor::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $motor = new DataMotor();
        $motor->tipe = $request->tipe;
        $motor->jumlah = $request->jumlah;
        $motor->harga = $request->harga;
        $motor->save();

        return "Data motor Berhasil di Tambah";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataMotor  $DataMotor
     * @return \Illuminate\Http\Response
     */
    public function show(DataMotor $DataMotor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataMotor  $DataMotor
     * @return \Illuminate\Http\Response
     */
    public function edit(DataMotor $DataMotor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataMotor  $DataMotor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $tipe = $request->tipe;
        $jumlah = $request->jumlah;
        $harga = $request->harga;

        $motor = DataMotor::find($id);
        $motor->tipe = $tipe;
        $motor->jumlah = $jumlah;
        $motor->harga = $harga;
        $motor->save();

        return "Data Berhasil Di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataMotor  $DataMotor
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $motor = DataMotor::find($id);
        $motor->delete();
    }
}
