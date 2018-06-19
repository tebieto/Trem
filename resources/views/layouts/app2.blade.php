<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style>
	
	body {
		background:#fff;
		
	}
	
	.custom-head{
	width:100%;
	height:100px;
	background: rgb(136,18,8);	
	border-bottom: 5px solid rgba(0,0,0,0.5)
	}
	
	.custom-nav{
	width:100%;
	height:70px;
	background: #000;
	border-top:1px solid rgba(255,255,255,0.2);
	
	}
	
	.red-nav{
	width:100%;
	height:30px;
	background: red;
	margin-top:20px;
	
	
	}
	.form-panel{
	z-index:2;	
	margin-top: -30px;	
	width: 80%;
	min-width: 250px;
	
	}

	
	.form-position {
		float: left;
		width: 70%;
		
		text-align:left;
		
	}
	
	.form-image-position{
		width:150px;
		float:left;

		
	}
	
	.form-group button{
		background: rgb(128,0,0);
		
		border: none;
		
	}
	.form-group button:hover{
		background: rgba(128,0,0, 0.8);
		
		border: none;
		
	}
	
	.form-group a {
		color:#000;
	}
	
	.logo-image-position{
	
		margin-top:15px;
		margin-left:15px;
		
	}
	
	.custom-panel-heading h2 {
		text-align:center;
		
		
	}
	.custom-panel-heading{
		margin-bottom:5px;
		
	}
	
	.nav-links, .nav-links form{
	float:right;
	margin-top:20px;
	margin-right: 20px;
	padding: 5px;
	}
	
	.nav-links a, .nav-links button{
	color:#fff;
	font-weight:bold;
	text-decoration:none;
	font-size:15px;
	margin:2px;
	padding:10px;
	}
	
	.nav-links a:hover{
	background: rgba(0,0,0, 0.2);
	
	}
	
	.login-links{
	border: 2px solid #fff;
	border-radius: 10px;
		
	}
	
	.logout-form button{
	background:transparent;
	color:white;
	font-weight:bold;
	border:none;
	position: relative;
	top:-35px;
	
	}
	
	@media only screen and (orientation: landscape) {
    
	body {
      
	  
     }
	 
    }
	
	@media only screen and (max-width: 990px) and (min-width: 600px) {
		
	.form-position {
		float: right;
		width: 70%;
		font-size:30px;
		
	}
	
	
	h2 {
		font-size: 40px;
		
	}
	
	
	h5, h6, .form-position button{
		font-size: 30px;
		
	}
	
	
	
	.logo-image-position{
	
		width:450px;
		height: auto;
		margin-top: 30px;
		
	}
	
	.custom-head{
	
	height:220px;
	
	}
	
	.nav-links, .nav-links form{
	float:none;
	margin: 2px;
	margin-top: 30px;
	}
	.nav-links a {
		
	font-size: 25px;	
		
	}
	
	.form-panel{
	
	width: 100%;
	
	}
	
	.logout-form button{
	font-size: 25px;
	position: relative;
	top: 3px;
	
	}
	
		
		
	}
	
	@media only screen and (max-width: 600px) {
		
	.form-position {
		float: none;
		width: 70%;
		font-size:20px;
		
	}
	
	.form-position button{
		font-size: 20px;
		
	}
		
   .logo-image-position{
	
		width:300px;
		height: auto;
		margin-top: 30px;
		
	}
	
	.custom-head{
	
	height:180px;
	
	}
	
	.nav-links, .nav-links form{
	float:none;
	margin: 2px;
	margin-top: 25px;
	}
	.nav-links a {
	
	font-size: 15px;
		
	margin: 2px;

	
		
	}
	
	.form-panel{
	
	width: 100%;
	
	}
	
	h2{
		
	font-size: 20px;	
	}
	
	.logout-form button{
	
	position: relative;
	top: 20px;
	font-size:15px;
	
	}
	
	.form-image-position{
		width:300px;
		height: auto;
		float:left;

		
	}
	
	
	
}

@media only screen and (max-width: 400px) {
	
	.form-image-position{
		width:200px;
		height: auto;
		float:left;

		
	}
	
}



@media only screen and (max-width: 400px) {
	
	.nav-links a, .logout-form button{
		float:left;
		
		font-size:15px;
		
		
	}
	
	  .logo-image-position{
	
		width:170px;
		margin-top:30px;
		
		
	}
	
	.login-links{
	border: none;
	border-radius: 0px;
	padding: 0px;
	float:left;
		
	}
	
	.logout-form button{
		
		top:-2px;
		left: -6px;
		
	}
	
	.form-position {
		float: none;
		width: 70%;
		font-size:15px;
		
	}
	
	.form-panel, .red-nav{
		
	width: 100%;
	min-width: 0px;
	float:right;
	
	}
	
		.custom-head{
	width:100%;
	
	}
	
	.custom-nav{
	width:100%;
	
	
	}
	
	.form-image-position{
		
		width:200px;
	}
	
	
	
}
	
	
</style>
