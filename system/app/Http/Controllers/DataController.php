<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Http\Resources\DataResource;
use App\Helpers\ResponseFormatter;

class DataController extends Controller
{

    public function index()
    {
        return DataResource::collection(Data::all());
        // $data = Data::all();
        // return ResponseFormatter::success(
        //     $data,
        //     'Data Produk berhasil diiambil'
        // );
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //create post
        date_default_timezone_set('Asia/Pontianak');

        $post = Data::create([
            'voltage' => $request->voltage,
            'current' => $request->current,
            'power' => $request->power,
            'energy' => $request->energy,
            'freq' => $request->freq,
            'pf' => $request->pf,
            'mac_address' => $request->mac_address,
        ]);

        return response()->json([
            'status' => 'TRUE',
            'relay' => 'OFF',
            'batas_kwh' => '50'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('post', [
            'post' => Data::where('slug', '=', $slug)->first()
        ]);
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
