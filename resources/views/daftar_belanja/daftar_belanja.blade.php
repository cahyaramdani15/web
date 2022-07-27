@extends('layouts.app')

@section('content')
    @section('title')
        <title>Daftar Rekening &mdash; 2022</title>
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
                        <li class="active">Tambah Kode Rekening /</li>
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
              <a href="/daftar_belanja/create" class="btn btn-primary">Tambah Rekening</a>
          </div>
    </div><br>
    <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Data Rekening</h4>
          </div>
              <table class="table table-striped table-md">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>RINCIAN REKENING</th>
                        <th>NILAI</th>
                        <th>DIBUAT</th>
                        <th>DIRUBAH</th>
                        <th>AKSI</th>
                    </tr>
                @foreach ($daftar_belanja as $key => $d)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$d->rincian_belanja}}</td>
                    <td>{{$d->nilai_rincian_belanja}}</td>
                    <td>{{$d->updated_at}}</td>
                    <td>{{$d->created_at}}</td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/daftar_belanja/{{$d->id}}/edit" class="btn btn-warning">EDIT</a>
                        <form action="/daftar_belanja/{{$d->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="HAPUS" class="btn btn-danger">
                        </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody></table>
        </div>
    </div>
</section>

@endsection
