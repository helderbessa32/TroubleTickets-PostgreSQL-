@extends('layouts.app')

@section('content')

<div class="client_section layout_padding banner_bg">
                  <div class="client_box">     
                  
<div class="container" id="container">
	
	<div class="form-container sign-in-container">
		<form id="form-login" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
			<h1>Sign in</h1>
			
			<input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" />
            @if ($errors->has('email'))
        <span class="error">
          {{ $errors->first('email') }}
        </span>
    @endif
			<input id="password" type="password" name="password" required placeholder="Password" />
            @if ($errors->has('password'))
        <span class="error">
            {{ $errors->first('password') }}
        </span>
    @endif
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Manager!</h1>
				<p>Not part of our team yet? Start journey with us and </p>
				<a class="button button-outline" href="{{ route('register') }}">Register</a>
			</div>
		</div>
	</div>
</div>
                  </div>
    
      </div>

@endsection
