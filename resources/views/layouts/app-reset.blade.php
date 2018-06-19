
<title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
       <div class="custom-head">
	   
	 <a href="http://trem.org">  <img class="logo-image-position"  width="300px" height="auto" src="{{Storage::url('public/images/trem2.jpg')}}" alt="Responsive image"></a>
	   <div class="nav-links">
	   <a href="http://trem.org">Home </a>
	   <a href="{{ route('login') }}" class="login-links">Login</a>
	    <a href="{{ route('register') }}" class="login-links">Register</a>
	   </div>
	   </div>
	   
	   <div class="custom-nav">
	   
	   </div>
		
		
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
