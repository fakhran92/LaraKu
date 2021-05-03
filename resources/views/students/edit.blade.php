@extends('layout.main')
@section('title','Ubah Data Mahasiswa')

@section('container')
<div class="container pt-5	">
	<div class="col-md-8">
		<h6 class="display-4 mb-5">Ubah Data Mahasiswa</h6>
		<form method="POST" action="/student/{{$student->id}}">
			@method('patch')
			@csrf
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nama">Nama Mahasiswa</label>
		      <input value="{{$student->nama}}" type="text" class="form-control" id="nama" name="nama">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="nim">Nomor Induk Mahasiswa</label>
		      <input value="{{$student->nim}}" type="text" class="form-control" id="nim" name="nim">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="prodi">Program Studi</label>
		      <input value="{{$student->prodi}}" type="text" class="form-control" id="prodi" name="prodi">
		    </div>
		    <div class="form-group col-md-7">
		      <label for="universitas">Universitas</label>
		      <input value="{{$student->universitas}}" type="text" class="form-control" id="universitas" name="universitas">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary" name="submit">Perbarui Data</button>
		</form>
		
	</div>
</div>
@endsection
