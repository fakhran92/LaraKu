@extends('layout.main')
@section('title','Detail Informasi Mahasiswa')

@section('container')

<div class="container">
	<div class="col-md-6">
	<h6 class="display-4 mt-5">Detail Mahasiswa</h6>
		
		<table class="table table-dark">
		  <tbody>
		    <tr>
		      <td>Nama lengkap</td>
		      <td>: {{$student->nama}}</td>
		    </tr>
		    <tr>
		      <td>Nomor Induk Mahasiswa</td>
		      <td>: {{$student->nim}}</td>
		    </tr>
		    <tr>
		      <td>Program Studi</td>
		      <td>: {{$student->prodi}}</td>
		    </tr>
		    <tr>
		      <td>Universitas</td>
		      <td>: {{$student->universitas}}</td>
		    </tr>
		  </tbody>
		</table>
		<a href="{{url('student')}}" class="btn btn-primary">Kembali</a>
	</div>
</div>

@endsection