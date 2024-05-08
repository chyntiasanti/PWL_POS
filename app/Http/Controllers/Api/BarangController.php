<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;
use Illuminate\Support\Facades\Validator;
use Monolog\Level;

class BarangController extends Controller
{
    public function __invoke(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'kategori_id' => 'required|integer',
            'barang_kode' => 'required|string',
            'barang_nama' => 'required|min:1',
            'harga_beli' => 'required|integer',
            'harga_jual' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //if Validation fails
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        //get the image file
        $image = $request->file('image');

        //create user
        $user = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //return response JSON is created
        if($user){
            return response()->json([
                'success' => true,
                'user' => $user,
            ], 201);
        }

        //return JSON process insert failed
        return response()->json([
            'success' => false,
        ], 201);
    }
    

    public function index() 
    {
         return BarangModel::all();
    }

    // public function store(Request $request)
    // {
    //     $barang = BarangModel::create($request->all());
    //     return response()->json($barang, 201);
    // }

    // public function show(BarangModel $barang)
    // {
    //     return BarangModel::find($barang);
    // }

    // public function update(Request $request, BarangModel $barang)
    // {
    //     $barang->update($request->all());
    //     return BarangModel::find($barang);
    // }

    // public function destroy(BarangModel $barang)
    // {
    //     $barang->delete();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Data terhapus',
    //     ]);
    // }
}
