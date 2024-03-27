@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Mahasiswa</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dosen as $dsn)
              <tr>
                <th scope="row">{{$dsn->id_dosen}}</th>
                <td>{{$dsn->nama}}</td>
                <td>{{$dsn->jurusan}}</td>
                <td>{{$dsn->alamat}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr> @endforeach
            </tbody>
          </table>
    </div>
@endsection