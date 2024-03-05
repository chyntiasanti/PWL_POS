<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //Tambah data user dengan Eloquent Model
        /*$data = [
            'nama'=> 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data); //update data user*/
        
        /*$data = [
            'username' => 'customer-1',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 6
        ];
        UserModel::insert($data); //Tambahkan data ke tabel m_user*/

        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);

        //coba akses UserModel
        $user = UserModel::all(); // ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
    }
}
