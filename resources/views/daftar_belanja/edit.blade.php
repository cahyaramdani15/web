@extends('layouts.app')

@section('content')
    @section('title')
        <title>Edit Daftar Rekening &mdash; 2022</title>
    @endsection

    @section('header')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Rincian Kode Rekening</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Edit Kode Rekening /</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endsection


<section class="section">
    <div class="section-header">
          <div class="section-header-button">
              <a href="/daftar_belanja" class="btn btn-primary">Kembali</a>
          </div>
    </div><br>
    <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Data Rekening</h4>
          </div>
                <table class="table table-striped table-md">
                        <div class="card-body card-block">
                        <form action="/daftar_belanja/{{$daftar_belanja->id}}" method="POST" class="form-horizontal">
                            @method('put')
                            @csrf
                            <div class="row form-group">
                            <div class="col col-sm-5"><label class=" form-control-label">Rincian Kode Rekening</label></div>
                            <div class="col col-sm-6"><input type="text" name="rincian_belanja" value="{{$daftar_belanja->rincian_belanja}}" placeholder="5.1.02.01.01.0010 Belanja Bahan-Isi Tabung Gas" class="form-control" required autofocus></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-sm-5"><label class=" form-control-label">Nominal</label></div>
                                <div class="col col-sm-6"><input type="string" name="nilai_rincian_belanja" value="{{$daftar_belanja->nilai_rincian_belanja}}" placeholder="200000" class="form-control" required></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Edit
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
