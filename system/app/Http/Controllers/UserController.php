<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data['list_user'] = User::All();
        // dd($data['list_user']);

        return view('pages.admin.user.index', $data);
    }

    public function create()
    {
        return view('pages.admin.user.create');
    }

    public function store()
    {
        // dd(request()->all());

        $user = new User;
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->level = request('level');
        $user->status = request('status');
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user, $id)
    {
        $data['user'] = DB::table('users')->select('*')->where('id', $id)->first();
        // dd($data['user']->id);
        return view('pages.admin.user.edit', $data);
    }

    public function update(User $user, $id)
    {
        // dd(request()->all());
        $password = request('password') ? request('password') : bcrypt(request('password'));

        DB::table('users')->where('id', $id)->update([
            "username" => request('username'),
            "email" => request('email'),
            "password" => $password,
            "level" => request('level'),
            "status" => request('status'),
        ]);

        return redirect('admin/user')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy(User $user, $id)
    {
        // $user->delete();
        DB::table('users')->where('id', $id)->delete();
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');

    }
}
