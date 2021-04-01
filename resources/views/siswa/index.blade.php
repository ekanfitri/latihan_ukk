<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1>Data Siswa</h1>
			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Daftar Siswa
</button>


<h1>Data Siswa</h1>
<table class="table table-hover">
	<tr>
		<th>NIS</th>
		<th>NAMA</th>
		<th>JENIS KELAMIN</th>
		<th>TEMPAT LAHIR</th>
		<th>TANGGAL LAHIR</th>
		<th>ALAMAT</th>
		<th>ASAL SEKOLAH</th>
		<th>KELAS</th>
		<th>JURUSAN</th>
	</tr>

@foreach ($data_siswa as $siswa)
	<tr>
		<td>{{$siswa->nis}}</td>
		<td>{{$siswa->nama}}</td>
		<td>{{$siswa-jk>}}</td>
		<td>{{$siswa->temp_lahir}}</td>
		<td>{{$siswa->tgl_lahir}}</td>
		<td>{{$siswa->alamat}}</td>
		<td>{{$siswa->asal_sekolah}}</td>
		<td>{{$siswa->kelas}}</td>
		<td>{{$siswa->jurusan}}</td>
	</tr>
@endforeach
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="/si/create" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nis"></div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAMA</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama"></div>

    <select class="form-select" aria-label="Default select example">
  <option selected>Jenis Kelamin</option>
  <option value="L">Laki - Laki</option>
  <option value="P">Perempuan</option>
</select>

	<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="temapat lahir"></div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="tanggal lahir"></div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="asal sekolah"></div>

    <select class="form-select" aria-label="Default select example">
  <option selected>Kelas</option>
  <option value="X">X</option>
  <option value="XI">XI</option>
  <option value="XII">XII</option>
</select>

	<select class="form-select" aria-label="Default select example">
  <option selected>Jurusan</option>
  <option value="RPL">RPL</option>
  <option value="MMD">Multimedia</option>
  <option value="OTKP">OTKP</option>
  <option value="TKJ">TKJ</option>
  <option value="Hotel">Hotel</option>
  <option value="TBG">TBG</option>
  <option value="BDP">BDP</option>
</select>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
			</div>