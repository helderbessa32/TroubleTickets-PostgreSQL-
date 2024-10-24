@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="home_div">
  <div class="hometext">
    <p><span class="hometitle">Manage Your<br/> College Projects</span> <br/><br/>
    Organize and manage your college projects like a company with a project manager and a list of tasks distributed to members, in a visually clean and motivating environemnt.</p>
    @if(Auth::check())
      @if(Auth::user()->admin)
        <a href="{{ route('admin projects', Auth::id()) }}"><button>Projects</button></a>
      @else
        <a href="{{ route('user projects', Auth::id()) }}"><button>User Projects</button></a>
      @endif
    @else
      <a href="{{ route('register') }}"><button>Register</button></a>
    @endif
  </div>  
  <div class="home_divimg">
    <img class="home_img" src="/img/project.jpg">
  </div>  
</div>
@endsection
