@extends('layouts.app')

@section('content')

<div class="container">  
  <form id="contact" method="POST" action="{{ route('insertTask') }}">
  {{ csrf_field() }}
    <h3>Create a Task</h3>
    
    <fieldset>
    <select name="project" id="project">
        <option value={{$pid}}></option>
    <select>
    <input id="name" type="name" name="name" value="" required autofocus placeholder="Task name">
    @if ($errors->has('name'))
        <span class="error">
          {{ $errors->first('name') }}
        </span>
    @endif
    </fieldset>
    <fieldset>
    <input id="details" type="text" name="details" value="" required autofocus placeholder="Task details">
    </fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Create Task</button>
    </fieldset>
  </form>
 
  
</div>
@endsection