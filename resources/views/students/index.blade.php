@extends('layout.main')
@section('title','Daftar Mahasiswa')

@section('container')


<div class="container">
	<h6 class="display-4 mt-5">Daftar Nama Mahasiswa</h6>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <!-- <th scope="col">#</th> -->
	      <th scope="col">Nama lengkap</th>
	      <th scope="col">NIM</th>
	      <th class="text-right"><a href="/student/tambah" class="btn btn-sm btn-primary">Tambah Mahasiswa</a></th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($students as $student)
	    <tr>
	      <!-- <th scope="row">1</th> -->
	      <td>{{$student->nama}}</td>
	      <td>{{$student->nim}}</td>
	      <td class="text-right">
	      	<a href="/student/{{$student->id}}" class="btn btn-sm btn-info">Detail</a>
	      	<a href="/student/{{$student->id}}/edit" class="btn btn-sm btn-success">Edit</a>
	      	<form action="/student/{{$student->id}}" method="POST" class="d-inline">
	      		@method('delete')
	            @csrf
		      	<button class="btn btn-sm btn-danger">hapus</button>
	      	</form>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>

@endsection
