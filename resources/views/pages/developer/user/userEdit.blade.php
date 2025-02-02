@extends('layouts.template')

@section('title')
<div>
	<h2>Welcome Developer</h2>
</div>
@endsection

@section('content')


<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit User Data</h3>
	</div>
	<!-- /.card-header -->

	<div class="card-body" style="margin-top: -10px">
		<form action="{{route('user.update', $user->id)}}" method="POST">
			@csrf
			@method('PUT')
			<div class="card-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama</label>
					<input type="text" value = "{{$user->nama_lengkap}}" class="form-control" placeholder="Masukkan nama" name="nama_lengkap">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" value = "{{$user->username}}" class="form-control" placeholder="Masukkan usernmae" name="username">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" value = "{{$user->email}}" class="form-control" placeholder="Masukkan email" name="email">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">No Telepon</label>
					<input type="text" value = "{{$user->no_telepon}}" class="form-control" placeholder="Masukkan no telepon" name="no_telepon">
				</div>
				<div class="form-group">
					<label>Level</label>
					<select class="form-control select2bs4" name="level" style="width: 100%;">
						<option value="Kasir">Kasir</option>
						<option value="Developer">Developer</option>
						<option value="Admin">Admin</option>
						<option value="Supervisor">Supervisor</option>
					</select>
				</div>
				<hr class = "mt-4">
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password baru" name="password">
				</div>
				<a href="{{route('user.index')}}" type="button" class="btn mt-3 btn-outline-primary">Kembali</a>
				<button class="btn btn-primary mt-3">Edit</button>
			</div>
		</form>
	</div>
	<!-- /.card-body -->
</div>
@endsection