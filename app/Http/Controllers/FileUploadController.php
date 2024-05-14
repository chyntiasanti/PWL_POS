<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FileUploadController extends Controller
{
    //
    public function fileUpload() {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        //dump($request->berkas);
        //dump($request->file('file));
        //return "Pomrosesam file upload di sini";
        
        // if($request->hasFile('berkas'))
        // {
        //     echo "path(): ".$request->berkas->path();
        //     echo "<br>";
        //     echo "extension() ".$request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension(): ".$request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType(): ".$request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName(): ".$request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize(): ".$request->berkas->getSize();
        // }
        // else 
        // {
        //     echo "Tidak ada berkas yang diupload";
        // }

        $request->validate([
            'berkas'=>'required|file|image|max:500',
        ]);
        $extfile = $request->berkas->getClientOriginalExtension();
        $namaFile = 'web-' . time() . "." . $extfile;

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\","//", $path);
        echo "Variabel path berisi: $path <br>";
        
        $pathBaru = asset('storage/'.$namaFile);
        echo "proses upload berhasil, data disimpan pada:$path";
        echo "<br>";
        echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
    }

    public function fileUploadRename() {
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename(Request $request) {
        $extfile = $request->berkas->getClientOriginalExtension(); // Using getOriginalExtension()
        $nama = $request->nama . ".$extfile";
        $path = $request->berkas->move('gambar', $nama);
        $path = str_replace("\\","//", $path);
        $pathBaru = asset('gambar/' . $nama);
    
        echo "Gambar berhasil di upload ke <a href='$pathBaru'>$nama</a>";
        echo "<br>";
        echo "<img src='$pathBaru'>";
    }    
}
