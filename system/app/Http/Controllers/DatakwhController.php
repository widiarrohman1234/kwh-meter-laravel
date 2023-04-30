<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatakwhController extends Controller
{
    public function index()
    {
        $data['get_list_data_kwh'] = DB::table('data')
            ->select('*')
            ->orderBy('id', 'desc')
            ->limit(50)
            ->get();
        $data['count_list_data_kwh'] = DB::table('data')
            ->select('*')
            ->orderBy('id', 'desc')
            ->limit(50)
            ->count();

        // dd($data['list_data_kwh']);
        for ($i = 0; $i < $data['count_list_data_kwh']; $i++) {
            // echo $data['get_list_data_kwh'][$i]->voltage . ",";
            // echo $i . ",";
        }
        return view('pages.user.data.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
