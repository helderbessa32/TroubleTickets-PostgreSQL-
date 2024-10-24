@extends('layouts.app')

@section('content')


<div class="client_section layout_padding banner_bg">
                  <div class="client_box">     
                  
<div class="container" id="container">
	
	
		<form id="form-login" method="POST" action="{{ route('register')}}">
        {{ csrf_field() }}
			<h1>Sign up</h1>
			<input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autofocus placeholder="Name">
    @if ($errors->has('name'))
      <span class="error">
          {{ $errors->first('name') }}
      </span>
    @endif

			<input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" />
            @if ($errors->has('email'))
        <span class="error">
          {{ $errors->first('email') }}
        </span>
    @endif
    <input id="password" type="password" name="password" required autofocus placeholder="Password">
    @if ($errors->has('password'))
      <span class="error">
          {{ $errors->first('password') }}
      </span>
    @endif
    <input id="password-confirm" type="password" name="password_confirmation" required autofocus placeholder="Confirm Password">
			<button>Register</button>
		</form>
</div>
                  </div>
    
      </div>

@endsection
