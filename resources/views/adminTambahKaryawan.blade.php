<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Pegawai!</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="nip" class="form-label">NIP</label>
                              <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" aria-describedby="nip">
                                @error('nip')
                                    <span class="invalid-feedback">
                                        <strong>{{$message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label for="status" class="form-label">Status</label>
                              <select class="form-select" name="status" aria-label="Default select example">
                                <option selected>Pilih Status</option>
                                <option value="Magang">Magang</option>
                                <option value="Tetap">Tetap</option>
                              </select>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <select class="form-select" name="level" aria-label="Default select example">
                                  <option selected>Pilih Level</option>
                                  <option value="Aktif">Aktif</option>
                                  <option value="Nonaktif">Nonaktif</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="posisi" class="form-label">Posisi</label>
                                <select class="form-select" name="posisi" aria-label="Default select example">
                                  <option selected>Pilih Posisi</option>
                                  <option value="Karyawan">Karyawan</option>
                                  <option value="Manager">Manager</option>
                                </select>
                            </div>
                            <div class="mb-3">
                              <label for="tahunMasuk" class="form-label">Tahun Masuk</label>
                              <input type="text" name="tahunMasuk" class="form-control @error('tahunMasuk') is-invalid @enderror" id="tahunMasuk" aria-describedby="tahunMasuk  ">
                                @error('tahunMasuk')
                                    <span class="invalid-feedback">
                                        <strong>{{$message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                              <input type="text" name="namaLengkap" class="form-control @error('namaLengkap') is-invalid @enderror" id="namaLengkap" aria-describedby="namaLengkap  ">
                                @error('namaLengkap')
                                    <span class="invalid-feedback">
                                        <strong>{{$message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                              <input type="text" name="tempatLahir" class="form-control @error('tempatLahir') is-invalid @enderror" id="tempatLahir" aria-describedby="tempatLahir  ">
                                @error('tempatLahir')
                                    <span class="invalid-feedback">
                                        <strong>{{$message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                              <input type="date" name="tanggalLahir" class="form-control @error('tanggalLahir') is-invalid @enderror" id="tanggalLahir" aria-describedby="tanggalLahir  ">
                                @error('tanggalLahir')
                                    <span class="invalid-feedback">
                                        <strong>{{$message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" aria-describedby="alamat  ">
                                  @error('alamat')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kabupatenKota" class="form-label">Kabupaten/Kota</label>
                                <input type="text" name="kabupatenKota" class="form-control @error('kabupatenKota') is-invalid @enderror" id="kabupatenKota" aria-describedby="kabupatenKota  ">
                                  @error('kabupatenKota')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" aria-describedby="provinsi  ">
                                  @error('provinsi')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kodePos" class="form-label">Kode Pos</label>
                                <input type="text" name="kodePos" class="form-control @error('kodePos') is-invalid @enderror" id="kodePos" aria-describedby="kodePos  ">
                                  @error('kodePos')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenisKelamin" aria-label="Default select example">
                                  <option selected>Pilih Jenis Kelamin</option>
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="golonganDarah" class="form-label">Golongan Darah</label>
                                <select class="form-select" name="golonganDarah" aria-label="Default select example">
                                  <option selected>Pilih Golongan Darah</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="AB">AB</option>
                                  <option value="O">O</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <select class="form-select" name="agama" aria-label="Default select example">
                                  <option selected>Pilih Golongan Darah</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Budha">Budha</option>
                                  <option value="Katolik">Katolik</option>
                                  <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" aria-describedby="kewarganegaraan  ">
                                  @error('kewarganegaraan')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" aria-describedby="nik  ">
                                  @error('nik')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namaIbuKandung" class="form-label">Nama Ibu Kandung</label>
                                <input type="text" name="namaIbuKandung" class="form-control @error('namaIbuKandung') is-invalid @enderror" id="namaIbuKandung" aria-describedby="namaIbuKandung  ">
                                  @error('namaIbuKandung')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namaAyahKandung" class="form-label">Nama Ayah Kandung</label>
                                <input type="text" name="namaAyahKandung" class="form-control @error('namaAyahKandung') is-invalid @enderror" id="namaAyahKandung" aria-describedby="namaAyahKandung  ">
                                  @error('namaAyahKandung')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nomorRekening" class="form-label">Nomor Rekening</label>
                                <input type="text" name="nomorRekening" class="form-control @error('nomorRekening') is-invalid @enderror" id="nomorRekening" aria-describedby="nomorRekening  ">
                                  @error('nomorRekening')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namaBank" class="form-label">Nama Bank</label>
                                <input type="text" name="namaBank" class="form-control @error('namaBank') is-invalid @enderror" id="namaBank" aria-describedby="namaBank  ">
                                  @error('namaBank')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namaPemilikRekening" class="form-label">Nama Pemilik Rekening</label>
                                <input type="text" name="namaPemilikRekening" class="form-control @error('namaPemilikRekening') is-invalid @enderror" id="namaPemilikRekening" aria-describedby="namaPemilikRekening  ">
                                  @error('namaPemilikRekening')
                                      <span class="invalid-feedback">
                                          <strong>{{$message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
