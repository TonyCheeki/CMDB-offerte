@section('navigation')
<header class="header-area overlay">
	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
			<a href="#" class="navbar-brand">CMDB-Offerte</a>
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="/" class="nav-item nav-link active">Home</a></li>
					<li><a href="/products" class="nav-item nav-link">Products</a></li>
					<li><a href="#" class="nav-item nav-link" data-toggle="dropdown">Configurator</a></li>
					<li><a href="/dashboard" class="nav-item nav-link">Shoppingcart</a></li>
					<li class="dropdown">
						<!-- <a href="#" class="nav-item nav-link" data-toggle="dropdown">Account</a>
						<div class="dropdown-menu">
							@if(Auth::check())
                        	<a href="#" class="dropdown-item">Profile</a>
                        	<a href="/logout" class="dropdown-item">Logout</a>
							@else
							<a href="/register" class="dropdown-item">Register</a>
                        	<a href="/dashboard" class="dropdown-item">Login</a>
                        	@endif
						</div> -->
						@if(Auth::check())
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">{{{ Auth::user()->name}}}</a>
						<div class="dropdown-menu">	
                        	<a href="#" class="dropdown-item">Profile</a>
                        	<a href="/logout" class="dropdown-item">Logout</a>
						</div>
						@else
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Account</a>
						<div class="dropdown-menu">
							<a href="/register" class="dropdown-item">Register</a>
                        	<a href="/dashboard" class="dropdown-item">Login</a>
						</div>
						@endif
					</li>
					
				</ul>
			</div>
		</div>
	</nav>

	<div class="banner">
		<img class="w3-image" src="/img/bg1.jpg" alt="Architecture" width="1500" height="800">
		<div class="w3-display-middle w3-margin-top w3-center">
			<h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Dev</b></span> <span class="w3-hide-small w3-text-light-grey">EpicIT</span></h1>
		</div>
	</div>

	<!-- Mobile menu -->

	<div class="b-nav">
		<a href="#" class="navbar-brand">CMDB-Offerte</a>
		<ul>
			<li><a class="b-link" href="#">Home</a></li>
			<li><a class="b-link" href="/products">Products</a></li>
			<li><a class="b-link" href="#">Configurator</a></li>
			<li><a class="b-link" href="#">Shoppingcart</a></li>
			<li><a class="b-link" href="/dashboard">Account</a></li>
		</ul>
	</div>

	<!-- Burger-Icon -->
	<div class="b-container">
		<div class="b-menu">
			<div class="b-bun b-bun--top"></div>
			<div class="b-bun b-bun--mid"></div>
			<div class="b-bun b-bun--bottom"></div>
		</div>
	</div>

</header>
@stop