<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function registrasi()
    {
        return view('registrasi');
    }

    public function home_masyarakat()
    {
        return view('home');
    }
    public function history()
    {
        return view('history');
    }

    public function simpan_pengaduan()
    {
        return view('simpan_pengaduan');
    }
    public function detail_pengaduan()
    {
        return view('detail_pengaduan');
    }
    public function lihat_tanggapan()
    {
        return view('lihat_tanggapan');
    }
    
    // system
    
    public function index()
    {
        return view('system/index');
    }

    // system admin

    public function dashboard_admin()
    {
        return view('system/dashboard');
    }
    
    public function verifikasi_pengaduan_admin()
    {
        return view('system/verifikasi_pengaduan');
    }

    public function detail_pengaduan_admin()
    {
        return view('system/detail_pengaduan');
    }

    public function tanggapan_admin()
    {
        return view('system/tanggapan');
    }

    public function lihat_petugas()
    {
        return view('system/lihat_petugas');
    }
    public function tambah_petugas()
    {
        return view('system/tambah_petugas');
    }
    public function edit_petugas()
    {
        return view('system/edit_petugas');
    }
    public function preview_petugas()
    {
        return view('system/preview_petugas');
    }
    public function cetak_petugas()
    {
        return view('system/cetak_petugas');
    }

    public function lihat_masyarakat()
    {
        return view('system/lihat_masyarakat');
    }
    public function preview_masyarakat()
    {
        return view('system/preview_masyarakat');
    }
    public function cetak_masyarakat()
    {
        return view('system/cetak_masyarakat');
    }


    public function lihat_laporan()
    {
        return view('system/lihat_laporan');
    }
    public function preview_pengaduan()
    {
        return view('system/preview_pengaduan');
    }
    public function cetak_pengaduan()
    {
        return view('system/cetak_pengaduan');
    }

    public function lihat_tanggapan_admin()
    {
        return view('system/lihat_tanggapan');
    }
    public function edit_tanggapan()
    {
        return view('system/edit_tanggapan');
    }
    public function delete_tanggapan()
    {
        return view('system/delete_tanggapan');
    }
    public function preview_tanggapan()
    {
        return view('system/preview_tanggapan');
    }
    public function cetak_tanggapan()
    {
        return view('system/cetak_tanggapan');
    }


    // system petugas

    // public function dashboard_petugas()
    // {
    //     return view('system/petugas/dashboard');
    // }

    // public function halaman_petugas()
    // {
    //     return view('system/petugas/halaman_petugas');
    // }

    // public function verifikasi_pengaduan_petugas()
    // {
    //     return view('system/petugas/verifikasi_pengaduan');
    // }

    // public function detail_pengaduan_petugas()
    // {
    //     return view('system/petugas/detail_pengaduan');
    // }

    // public function proses()
    // {
    //     return view('system/petugas/proses');
    // }
}
