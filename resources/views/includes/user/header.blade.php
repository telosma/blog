<header>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Brand</a>
    </div>

    @if ( !Auth::check() )

    @yield('header')
    <button style="float:right; margin-top:5px;" id="btn-signup" class="btn btn-success">Sign up</button>
    <button style="float:right; margin:5px 10px 0 0;" id="btn-signin" class="btn btn-success" >Sign In</button>
    @else
    <a href="{{ route('user.logout') }}" class="btn btn-success" style="float:right"; >Log out</a>
    @endif
  </div><!-- /.container-fluid -->

</nav>
</header>
<!--  -->