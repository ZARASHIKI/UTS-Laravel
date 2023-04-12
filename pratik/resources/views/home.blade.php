@extends('update')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
     <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="ps-1">Action</th>
                </tr>
            </thead>
            @php
                $num =1;
            @endphp
            @foreach ($mahasiswas as $mahasiswa)
            <tbody>
                <tr>
                    <th>{{$num++}}</th>
                    <td>{{$mahasiswa->nim}}</td>
                    <td>{{$mahasiswa->nama}}</td>
                    <td>{{$mahasiswa->alamat}}</td>
                <td style="display: flex;">
                    <a href="#edit{{$mahasiswa->id}}" data-bs-toggle="modal"><button type="button"   style="margin-right: 20px" class="btn btn-secondary">Ubah</button></a>
                    <form action="{{ url('delete', $mahasiswa->id) }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin Menghapus Ini?')">Hapus</button>
                    </form>
                </td>
                </tr>
            </tbody>
            @endforeach
        </table>
{{-- Tambah Data --}}
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
  
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{url("masuk")}}" >
            {{ csrf_field() }}
          <div class="mb-3">
            <input type="text" class="form-control" id="nim" placeholder="Nim" name="nim">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="Alamat" placeholder="Alamat" name="alamat">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- Edit data --}}
  
</body>
</html>