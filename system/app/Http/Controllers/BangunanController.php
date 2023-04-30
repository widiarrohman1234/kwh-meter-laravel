<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bangunan;
use Illuminate\Support\Facades\DB;

class BangunanController extends Controller
{
    public function index()
    {
        $id_user = request()->user()->id;
        $data['list_bangunan'] = Bangunan::where('id_user', $id_user)->get();
        // dd($data['list_bangunan']);
        return view('pages.user.bangunan.index', $data);
    }

    public function create()
    {
        return view('pages.user.bangunan.create');
    }

    public function store(Request $request)
    {
        $user = new Bangunan;
        $user->id_user = $request->id_user;
        $user->nama_bangunan = $request->nama_bangunan;
        $user->save();

        return redirect('user/bangunan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['bangunan'] = DB::table('bangunan')->select('*')->where('id', $id)->first();
        // dd($data['bangunan']);
        return view('pages.user.bangunan.edit', $data);
    }

    public function update(Request $request, $id)
    {
        DB::table('bangunan')->where('id', $id)->update([
            "id_user" => $request->id_user,
            "nama_bangunan" => $request->nama_bangunan,
        ]);

        return redirect('user/bangunan')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        DB::table('bangunan')->where('id', $id)->delete();
        return redirect('user/bangunan')->with('danger', 'Data Berhasil Dihapus');
    }
}
