@extends('layout/navbar')

@section('title', 'Complainly')

@section('container-fuild')
    <div class="jumbotron" style="padding-top:60; padding-bottom:10; background-color: #ffffff;">
        <div class="row mt-4 pl-4">
            <div>
                <h5 style="color: #f0ad4e">Histori Pengaduan</h5>
            </div>
            <br>
            <br>
        </div>
        <div class="row">
            <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>NIK</th>
                                <th>Isi Laporan</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>day</td>
                                <td>0024886642</td>
                                <td>lorem ipsum</td>
                                <td>.jpg</td>
                                <td>Open</td>
                                <td>
                                <a href="{{url('/detail_pengaduan')}}" class="btn btn-info  btn-icon-split">
                                    <span class="icon text-white-50">
                                    <i class="fas fa-info"></i>
                                    </span>
                                    <span class="text">Detail</span>
                                </a>
                                <a href="{{url('/lihat_tanggapan')}}" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                    <i class="fas fa-eye"></i>
                                    </span>
                                    <span class="text">Lihat Tanggapan</span>
                                </a>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection