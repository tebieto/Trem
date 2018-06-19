
	
<title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
       <div class="custom-head">
	   
	 <a href="http://trem.org">  <img class="logo-image-position"  width="300px" height="auto" src="{{Storage::url('public/images/trem2.jpg')}}" alt="Responsive image"></a>
	   <div class="nav-links">
	   <a href="http://trem.org">Home </a>
	   @if(Auth::user()->id == 1)
	   <a href="{{route('register')}}">Register Branch</a>
	   @endif
	   <a href="/view/reports" class="login-links">View Reports</a>
		 <form method="post" class="logout-form" action="logout">
	   {{ csrf_field() }}
	   <button type="submit" >
	   Logout
	   </button>
	   </form>
	   </div>
	   </div>
	   
	   <div class="custom-nav">
	   
	   </div>
		<div class="red-nav">
	   
	   </div>
		
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/notify.min.js') }}"></script>
	<script>
	@if(Session::has('success'))
    $.notify("{{Session::get('success')}}", { position:"right top" });  
    @endif
	</script>
</body>
</html>
