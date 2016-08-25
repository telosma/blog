@extends('layouts.master')

@section('content')
	
	@if( count($errors) > 0 )
		<div class="row">
			<div class="col-md-6">
				<ul>
					@foreach( $errors->all() as $error )
						<li>
							{{ $error }}
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif
	
	
  	<div class="modal fade" id="signupModal" role="dialog">
    	<div class="modal-dialog">
			<div class="row">
			    <form class="col-md-12" action="{{ route('signup') }}" method="post">
			    <h3>Sign Up</h3>
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="user_name" type="text" name="user_name" class="validate" value="{{ Request::old('user_name') }}">
			          <label for="user_name">User Name</label>
			        </div>
			      </div>
			       <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="text" name="email" class="validate" value="{{ Request::old('email') }}">
			          <label for="email">Email</label>
			        </div>
			       </div>
			      <div class="row">
			        <div class="input-field col s12">
					  <i class="material-icons" style="position:absolute; left:90%; top:30%; cursor:pointer;" id="icon_visi">visibility</i>
			          <input id="supass" type="password" name="pass" class="validate pass">
			          <label for="supass">Password</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="cfpass" type="password" name="pass" class="validate">
			          <label for="cfpass">Confirm Password</label>
			        </div>
			      </div>
			      <!-- {!! csrf_field() !!} -->
			      <input type="hidden" name="_token" value="{{ Session::token() }}">
				  <button type="submit" class="btn btn-primary">Sign Up</button>
			    </form>
		  	</div>
  		</div>
  	</div>

  	<div class="modal fade" id="signinModal" role="dialog">
    	<div class="modal-dialog">
				<div class="row">
				    <form class="col-md-12" action="{{ route('signin') }}" method="post">
				    <h3>Sign In</h3>
				       <div class="row">
				        <div class="input-field col s12">
				          <input id="email" type="text" name="email" class="validate" value="{{ Request::old('email') }}">
				          <label for="email">Email</label>
				        </div>
				       </div>
				      <div class="row">
				        <div class="input-field col s12">
						  <i class="material-icons" style="position:absolute; left:90%; top:30%; cursor:pointer;" id="icon_visi">visibility</i>
				          <input id="sipass" type="password" name="pass" class="validate pass">
				          <label for="sipass">Password</label>

				        </div>
				      </div>
				       <input type="hidden" name="_token" value="{{ Session::token() }}">
					<div class="row">				
				      <!-- {!! csrf_field() !!} -->
				      <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
					  <button type="submit" class="btn btn-primary">Sign In</button>
					  </div>	
				    </form>
		  		</div>
  		</div>
  	</div>
@endsection

<!--  -->