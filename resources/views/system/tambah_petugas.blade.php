@extends('layout/sidebar')

@section('title', 'Complainly')

@section('content') 
<div class="card shadow">
    <div class="card-header">
        Tambah Petugas
    </div>
    <div class="card-body">
        <form action="{{ url('/simpan_petugas') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>Nama Petugas</label>
                <input type="text" name="name" value="" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Username</label>
                <input type="text" name="username" value="" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Password</label>
                <input type="text" name="password" value="" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Telpon</label>
                <input type="text" name="telp" value="" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Level</label>
                <select class="form-control" name="level">
                    <option>==pilih==</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>

            <div class="form-group col-sm-6">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Kosongkan" class="btn btn-warning">
            </div>
        </form>
    </div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="{{url('jquery/jquery.min.js')}}"></script>
  <script src="{{url('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{url('js/sb-admin-2.min.js')}}"></script>

@endsection