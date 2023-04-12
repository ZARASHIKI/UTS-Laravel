@foreach ($mahasiswas as $mahasiswa)
<div class="modal fade" id="edit{{$mahasiswa->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          {{ csrf_field() }}
        <div class="mb-3">
          <label for="nim" class="form-label"><h5>Nim</h5></label>
          <input type="text" class="form-control" id="nim" placeholder="Nim" value="{{$mahasiswa->nim}}" name="nim">
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label"><h5>Nama</h5></label>
          <input type="text" class="form-control" id="nama" placeholder="Nama" value="{{$mahasiswa->nama}}" name="nama">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label"><h5>Alamat</h5></label>
          <input type="text" class="form-control" id="Alamat" placeholder="Alamat" value="{{$mahasiswa->alamat}}" name="alamat">
        </div>
        {{-- <div class="modal-footer"> --}}
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach