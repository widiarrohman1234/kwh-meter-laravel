<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use Illuminate\Http\Request;
use App\Models\Ruangan;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{

    public function index()
    {
        $id_user = request()->user()->id;
        $data['list_ruangan'] = Ruangan::select('ruangan.id', 'ruangan.nama_ruangan', 'bangunan.nama_bangunan')
            ->join('bangunan', 'bangunan.id', 'ruangan.id_bangunan')
            ->where('ruangan.id_user', $id_user)
            ->get();
        // dd($data['list_ruangan']);
        return view('pages.user.ruangan.index', $data);
    }

    public function create()
    {
        $id_user = request()->user()->id;
        $data['list_ruangan'] = Ruangan::where('id_user', $id_user)->get();
        $data['list_bangunan'] = Bangunan::where('id_user', $id_user)->get();

        return view('pages.user.ruangan.create', $data);
    }

    public function store(Request $request)
    {
        $user = new Ruangan;
        $user->id_user = $request->id_user;
        $user->id_bangunan = $request->id_bangunan;
        $user->nama_ruangan = $request->nama_ruangan;
        $user->save();

        return redirect('user/ruangan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $id_user = request()->user()->id;
        $data['ruangan'] = DB::table('ruangan')
            ->select('*')
            ->where('id', $id)
            ->first();
        $data['list_bangunan'] = Bangunan::where('id_user', $id_user)->get();

        // dd($data['ruangan']);
        return view('pages.user.ruangan.edit', $data);
    }

    public function update(Request $request, $id)
    {
        DB::table('ruangan')->where('id', $id)->update([
            "id_user" => $request->id_user,
            "id_bangunan" => $request->id_bangunan,
            "nama_ruangan" => $request->nama_ruangan,
        ]);

        return redirect('user/ruangan')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        DB::table('ruangan')->where('id', $id)->delete();
        return redirect('user/ruangan')->with('danger', 'Data Berhasil Dihapus');
    }
}
