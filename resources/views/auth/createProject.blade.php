@extends('layouts.app')

@section('content')

<div class="container">  
  <form id="contact" method="POST" action="{{ route('project') }}">
  {{ csrf_field() }}
    <h3>Create a project</h3>
    <h4>Our platform makes creating a project easier!</h4>
    <fieldset>
    <input id="name" type="name" name="name" value="" required autofocus placeholder="Project name">
    @if ($errors->has('name'))
        <span class="error">
          {{ $errors->first('name') }}
        </span>
    @endif
    </fieldset>
    <fieldset>
    <input id="details" type="text" name="details" value="" required autofocus placeholder="Project details">
    </fieldset>
    <fieldset>
    <input id="subject" type="subject" name="subject" value="" required autofocus placeholder="Project subject">
    @if ($errors->has('subject'))
        <span class="error">
          {{ $errors->first('subject') }}
        </span>
    @endif
    </fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Create a Project</button>
    </fieldset>
  </form>
 
  
</div>
@endsection