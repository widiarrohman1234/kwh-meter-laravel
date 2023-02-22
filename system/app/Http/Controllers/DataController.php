<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Http\Resources\DataResource;

class DataController extends Controller
{

    public function index()
    {
        return DataResource::collection(Data::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //create post
        $post = Data::create([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'voltage' => $request->voltage,
            'current' => $request->current,
            'power' => $request->power,
            'energy' => $request->energy,
            'freq' => $request->freq,
            'pf' => $request->pf,
        ]);
        return new DataResource($post );
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
