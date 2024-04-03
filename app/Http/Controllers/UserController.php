<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StorePostRequest $request)
{
    // Validasi data yang masuk
    $validatedData = $request->validate([
        'username' => 'required',
        'nama' => 'required',
        'password' => 'required',
        'level_id' => 'required',
    ]);

    // Hash password sebelum disimpan
    $validatedData['password'] = Hash::make($validatedData['password']);

    // Simpan data pengguna ke dalam database
    UserModel::create($validatedData);

    // Redirect ke halaman indeks pengguna
    return redirect('/user');
}


    public function edit($id)
    {
        $user = UserModel::find($id);
        return view('user.edit', ['data' => $user]);
    }

    public function update($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    public function delete($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}