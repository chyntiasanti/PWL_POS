<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\DataTables\UserDataTable;

class UserController extends Controller
{
        public function index(UserDataTable $dataTable) 
        {
            return $dataTable->render('user.index');
            /*$data = [
                'kategori_kode' => 'SNK',
                'kategori_nama' => 'Snack/Makanan Ringan',
                'created_at' => now(),
            ];
            DB::table('m_kategori')->insert($data);
            return 'Insert data baru berhasil';*/

            //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK') ->update(['kategori_nama' => 'Camilan']);
            //return 'Update data berhasil. Jumlah data yang diupdate: ' . $row. 'baris';

            //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK') ->delete();
            //return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row. 'baris';

            //$data = DB::table('m_kategori')->get();
            //return view('kategori' , ['data' => $data]);
        }

        public function create()
        {
            return view('user.create');
        }

        public function store(Request $request)
        {
            UserModel::create([
                'user_kode' => $request->kodeKategori,
                'user_nama' => $request->namaKategori,
            ]);
            return redirect('/user');
        }

        public function edit( $id)
        {
            $data = UserModel::find($id);
            return view('user.edit' , [
                'user' => $data
            ]);
        }

        public function update(Request $request, $id)
        {
            UserModel::where('user_id' , $id)->update([
                'user_kode' => $request->kodeKategori,
                'user_nama' => $request->namaKategori,
            ]);

            return redirect('/user');
        }

        public function delete($id)
        {
        UserModel::where('user_id', $id)->delete();
        return redirect('/user');
        }
    }
