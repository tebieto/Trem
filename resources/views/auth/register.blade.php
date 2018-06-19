
@extends('layouts.app-register')
@extends('layouts.app2')
@section('content')


@if(Auth::user()->id == 1)
	
<!--show form -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default form-panel">
               <div class="panel-heading custom-panel-heading"><h2>Spiritual Report Registration</h2></div> 
				<img class="card-img-top img-fluid form-image-position" src="{{Storage::url('public/images/tremlogo2.jpg')}}" alt="Responsive image">
                <div class="panel-body">
                    <form class="form-horizontal form-position" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
						<div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
                            <label for="branch" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select id="branch" class="form-control" name="branch" required>
								<option value= "HQ">HQ</option>
								<option value= "VI" >Victoria Island</option>
								<option value= "AK" >Akoka</option>
								</select>

                                @if ($errors->has('branch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End form-->



@else

<!--show Error -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default form-panel">
               <div class="panel-body">
			   <center>
                <h2> You don't have access to this page</h2>
				</center>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End Error-->	


@endif
@endsection
