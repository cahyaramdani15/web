@extends('layouts.app')

@section('content')
    @section('title')
        <title>Tambah Pegawai &mdash; 2022</title>
    @endsection

    @section('header')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Rincian Pegawai</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Rincian Pegawai / Tambah Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endsection


<section class="section">
    <div class="section-header">
          <div class="section-header-button">
              <a href="/pegawai" class="btn btn-primary">Kembali</a>
          </div>
    </div><br>
    <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4 >Data Pegawai</h4>
          </div>
                <table class="table table-striped table-md">
                        <div class="card-body card-block">
                        <form action="/pegawai/store" method="POST" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-sm-5"><label class=" form-control-label">Nama Pegawai</label></div>
                                <div class="col col-sm-6"><input type="text" name="nama" placeholder="Budianto Sudirman, M.Pd." class="form-control" required autofocus></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-sm-5"><label class=" form-control-label">NIP</label></div>
                                <div class="col col-sm-6"><input type="text" name="nip" placeholder="196003012000031003" class="form-control" required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-sm-5"><label class=" form-control-label">NPWP</label></div>
                                <div class="col col-sm-6"><input type="text" name="npwp" placeholder="26.417.439.8-421.000" class="form-control" required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-sm-5"><label class=" form-control-label">Jabatan</label></div>
                                <div class="col col-sm-6"><input type="text" name="jabatan" placeholder="Kepala Sekolah / Bendahara" class="form-control" required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-sm-5"><label class=" form-control-label">Nomor SK</label></div>
                                <div class="col col-sm-6"><input type="text" name="no_sk" placeholder="821.1/Kep.374-BKD/2022" class="form-control" required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-sm-5"><label class=" form-control-label">Tanggal SK</label></div>
                                <div class="col col-sm-6"><input type="date" name="tgl_sk" class="form-control" required></div>
                            </div>


                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Tambah
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </form>
                        </div>
                </table>
        </div>
    </div>
</section>

@endsection
