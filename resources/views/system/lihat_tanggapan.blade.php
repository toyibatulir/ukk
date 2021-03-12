@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Pengaduan</th>
                      <th>Tanggal</th>
                      <th>Tanggapan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>//id </td>
                      <td>//tgl </td>
                      <td>//isi tanggapan</td>
                      <td>
                        <a href="{{url('system/edit_tanggapan')}}" class="btn btn-primary btn-circle">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{url('system/delete_tanggapan')}}" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Hapus?')">
                            <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection