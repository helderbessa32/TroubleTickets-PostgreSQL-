@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<section id ="my-projects">
  <h2>My Projects</h2>
<div class="row">
  <div class="column">
  @foreach($projects as $project)
    <div class="card">
      <h3><a href="{{ url('/project/'.$project->id)}}">{{$project->name}}</a></h3>
      
    </div>
    @endforeach
  </div>
</section>
<!-- </div>
  <article class="cards">
  
  @foreach($projects as $project)
    <a href="{{ url('/project/'.$project->id)}}">{{$project->name}}</a>
    
  @endforeach
  </article>
</section> -->

@endsection
