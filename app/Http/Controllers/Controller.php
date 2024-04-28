<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function profile()
    {
        return view('profile',[
            "profile" => Profile::where('user_id',auth()->user()->id)->first(),
        ]);
    }

    public function adminKaryawan()
    {
        $data = User::all();
        return view('adminKaryawan',compact('data'));
    }
    public function adminTambahKaryawan()
    {
        $data = User::all();
        return view('adminTambahKaryawan');
    }

    public function insertdata(Request $request){

        // dd($request->all());
        $messages = [

            'required'=> 'Tidak boleh kosong',
            'integer'=> 'Harus menggunakan angka',
            'max'=> 'Maximal :max karakter',
            'min'=> 'Minimal :min karakter'

        ];

        $this->validate($request,[
            'nip' => 'required|integer',
            'status' => 'required',
            'level' => 'required',
            'posisi' => 'required',
            'kelas' => 'required',
            'tahunMasuk' => 'required',
            'namaLengkap' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            'kabupatenKota' => 'required',
            'provinsi' => 'required',
            'kodePos' => 'required',
            'jenisKelamin' => 'required',
            'golonganDarah' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'nik' => 'required|integer',
            'namaIbuKandung' => 'required',
            'namaAyahKandung' => 'required',
            'nomorRekening' => 'required',
            'namaBank' => 'required',
            'namaPemilikRekening' => 'required',

        ],$messages);
        Profile::create($request->all());
        return redirect()->route('adminKaryawan')->with('success','Data Berhasil Ditambahkan');
    }
}
