@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
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
                      <td>day month year</td>
                      <td>0024886642</td>
                      <td>lorem ipsum</td>
                      <td>.jpg</td>
                      <td>Proses</td>
                      <td>
                      <a href="{{url('system/detail_pengaduan')}}" class="btn btn-info  btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-info"></i>
                        </span>
                        <span class="text">Detail</span>
                      </a>
                      <a href="{{url('system/tanggapan')}}" class="btn btn-danger  btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Tanggapi</span>
                      </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection