@extends('layout.main')
@section('title','Home')

@section('container')
<div class="container mt-5 pt-3">
	<div class="col-md-8 offset-md-2 text-center d-flex justify-content-center align-content-center mt-2">
		<h3 class="display-4">Selamat Datang</h3>
	</div>
	<div class="col-md-8 offset-md-2 text-center d-flex justify-content-center align-content-center mt-5">
		<a href="{{url('students')}}" class="btn btn-lg btn-outline-info" >EXPLORE</a>
	</div>
</div>
@endsection