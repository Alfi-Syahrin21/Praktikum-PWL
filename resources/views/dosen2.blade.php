@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Dosen</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dosen2 as $dsn2)
              <tr>
                <th scope="row">{{$dsn2 -> id}}</th>
                <td>{{$dsn2 -> nama}}</td>
                <td>{{$dsn2 -> nip}}</td>
                <td>{{$dsn2 -> email}}</td>
                <td>{{$dsn2 -> jurusan}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr> 
              @endforeach
            </tbody>
          </table>
    </div>
@endsection