@extends('layout/main');

@section('title', 'Daftar Mahasiswa')

@section('container')

<div class="contaier">
	<div class="row">
		<div class="col-6">
			<h2>Daftar Mahasiswa</h2>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      
			      <th scope="col">Nama</th>
			     
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($students as $student)
			    <tr>
			      <th scope="row">{{$loop->iteration}}</th>
			     
			      <td>{{$student->nama}}</td>
			     

			      <td>
			      	<a href="/students/{{$student->id}}" class="badge badge-info">Show Detail</a>
			      	
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>

@endsection