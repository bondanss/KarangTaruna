<nav class="navbar navbar-default">
 <div class="container-fluid">
 <div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse~1" aria-expanded="False">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{{ url('/') }}">Home</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
      
 <li><a href="{{ url('anggota') }}">Anggota</a></li>
 <li><a href="{{ url('about') }}">About</a></li>
 <li><a href="{{ url('profile') }}">Profile</a></li>
 <li><a href="{{ url('contact') }}">Contact</a></li>

</ul>

<ul class="nav navbar-nav navbar-right">
	@if (Auth::check())
 	<li class="nav-item-dropdown">
 		<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
 			{{ Auth::user()->name }} 
 			<span class="caret"></span>
 		</a>

 		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
 			<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

 		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 			@csrf
 		</form>
 		</div>
 	</li>

 	@else

 	<li class="nav-item">
 		<a class="nav-link" href="{{ route('login') }}">
 			{{ __('Login') }}
 		</a>
 	</li>
 	@endif
</ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>