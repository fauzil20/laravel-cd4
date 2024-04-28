<?php

namespace App\Http\Livewire\User;

use App\Models\Profile;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class UserProfile extends Component
{
    use LivewireAlert;
    public $user_id;
    public $nip;
    public $status;
    public $level;
    public $posisi;
    public $kelas;
    public $tahunMasuk;
    public $namaLengkap;
    public $tempatLahir;
    public $tanggalLahir;
    public $alamat;
    public $kabupatenKota;
    public $provinsi;
    public $kodePos;
    public $jenisKelamin;
    public $golonganDarah;
    public $agama;
    public $kewarganegaraan;
    public $nik;
    public $namaIbuKandung;
    public $namaAyahKandung;
    public $nomorRekening;
    public $namaBank;
    public $namaPemilikRekening;

    public function render()
    {
        $profile = Profile::where('user_id',auth()->user()->id)->get();

        return view('livewire.user.user-profile',[
           'profile' => $profile
        ])->extends('layouts.app2')
        ->section('content');
    }
}
