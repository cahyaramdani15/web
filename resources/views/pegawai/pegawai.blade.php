@extends('layouts.app')

@section('content')
    @section('title')
        <title>Daftar Pegawai &mdash; 2022</title>
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
                        <li class="active">Rincian Pegawai /</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
<section class="section">
    <div class="section-header">
          <div class="section-header-button">
              <a href="/pegawai/create" class="btn btn-primary">Tambah Pegawai</a>
          </div>
    </div><br>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Pegawai</h4>
            </div>
            <table class="table table-striped table-md">
                <tbody><tr>
                <th>No</th>
                  <th>NAMA</th>
                  <th>NIP</th>
                  <th>NPWP</th>
                  <th>JABATAN</th>
                  <th>NO SK</th>
                  <th>TGL SK</th>
                  <th>DIBUAT</th>
                  <th>AKSI</th>
                </tr>
                @foreach ($pegawai as $key => $d)
                <tr>
                  <td>{{$key + 1}}</td>
                  <td>{{$d->nama}}</td>
                  <td>{{$d->nip}}</td>
                  <td>{{$d->npwp}}</td>
                  <td>{{$d->jabatan}}</td>
                  <td>{{$d->no_sk}}</td>
                  <td>{{$d->tgl_sk}}</td>
                  <td>{{$d->created_at}}</td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/pegawai/{{$d->id}}/edit" class="btn btn-warning">EDIT</a>
                        <form action="/pegawai/{{$d->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="HAPUS" class="btn btn-danger">
                        </form>
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
