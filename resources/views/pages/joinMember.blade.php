@extends('layouts.app')

@section('title', 'joinMember')

@section('content')

<div class="container">
<form id="contact" method="POST" action="{{ route('joinMember') }}">
  {{ csrf_field() }}
    <h3>Join a member</h3>
    <select name="project" id="project">
        <option value={{$pid}}></option>
    <select>
    <select name="user_id" id="user_id">
        @foreach($data as $user)
        @if($user->name != "John Doe")
            <option value={{$user->id}}>{{$user->name}}</option>
        @endif
        @endforeach
</select>  <br>
    </fieldset>
    {{ Request()->parameter }}
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Join a member</button>
    </fieldset>
  </form>
</div>

@endsection