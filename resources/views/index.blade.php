<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bhomiyo | Login</title>
	<link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	  {!! Form::open(array('route' => 'handleLogin')) !!}
	    <!-- <form class="register-form"> -->
	      <input type="text" placeholder="username" name="user"/>
	      <input type="password" placeholder="password" name="password"/>
	      <button>login</button>
	      {!! Form::close() !!}
	    <!-- </form> -->
	  </div>
	</div>
	<script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>