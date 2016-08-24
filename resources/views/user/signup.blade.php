@extends('layouts.master')

@section('content')
	<!-- <div class="row" style="display:none">
		<form class="col-md-4 col-md-offset-4" action="{{ route('signup') }}" method="post">
			<h3>Sign In</h3>
			<div class="row">
		        <div class="input-field col s12">
		          <input id="email" type="text" name="email" class="validate">
		          <label for="email">Email</label>
		        </div>
	       </div>

	       <div class="row">
	        <div class="input-field col s12">
			  <i class="material-icons" style="position:absolute; left:90%; top:30%; cursor:pointer;" id="icon_visi">visibility</i>
	          <input id="pass" type="password" name="pass" class="validate">
	          <label for="pass">Password</label>
	        </div>
	      </div>
	      <button type="submit" class="btn btn-primary">Log In</button>
		</form>
	</div> -->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
	<div class="row">
	    <form class="col-md-12" action="{{ route('signup') }}" method="post">
	    <h3>Sign Up</h3>
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="user_name" type="text" name="user_name" class="validate">
	          <label for="user_name">User Name</label>
	        </div>
	      </div>
	       <div class="row">
	        <div class="input-field col s12">
	          <input id="email" type="text" name="email" class="validate">
	          <label for="email">Email</label>
	        </div>
	       </div>
	      <div class="row">
	        <div class="input-field col s12">
			  <i class="material-icons" style="position:absolute; left:90%; top:30%; cursor:pointer;" id="icon_visi">visibility</i>
	          <input id="pass" type="password" name="pass" class="validate">
	          <label for="pass">Password</label>

	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input id="cfpass" type="password" name="pass" class="validate">
	          <label for="cfpass">Confirm Password</label>
	        </div>
	      </div>

	    </form>
  	</div>
  	</div>
  	</div>
@endsection