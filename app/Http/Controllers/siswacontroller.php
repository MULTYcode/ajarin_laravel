<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siswacontroller extends Controller
{
    public function index(){
        $siswa = DB::table('data_siswa')->get();
        return view('daftarsiswa',['siswa' => $siswa]);
    }

    public function tambah(){
        return view('tambahsiswa');
    }

    public function edit($id){
        $siswa = DB::table('data_siswa')->where('id',$id)->get();
        return view('editsiswa',['siswa'=>$siswa]);
    }

    public function tambahdata(Request $request){
        // dd($request->all());
        DB::table('data_siswa')->insert([
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'jns_kelamin' => $request->jns_kelamin,
                'alamat' => $request->alamat,
            ]);
        return redirect('/siswa');
    }

    public function editdata(Request $request,$id){        
        DB::table('data_siswa')->where('id',$id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jns_kelamin' => $request->jns_kelamin,
            'alamat' => $request->alamat
        ]);
        return redirect('/siswa');
    }

    public function hapusdata($id){
        DB::table('data_siswa')->where('id',$id)->delete();
        return redirect('/siswa');
    }
}
