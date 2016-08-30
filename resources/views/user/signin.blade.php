@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<h3>Sign In </h3>
			<form action="#" method="post">
				<div class="form-group">
					<label for="email">Your E-mail</label>
					<input class="form-control" type="text" name="email" id="email">
				</div>
				<div class="form-group">
					<label for="pass">Your Password</label>
					<input class="form-control" type="password" name="pass" id="pass">
				</div>

					<button type="submit" class="btn btn-primary">Login</button>
					<a href="{{ route('facebook.login') }}" class="btn btn-primary">Login with FaceBook</a>
			</form>
		</div>
	</div>


	

@endsection