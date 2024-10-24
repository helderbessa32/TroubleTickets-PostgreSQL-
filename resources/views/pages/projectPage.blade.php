@extends('layouts.app')

@section('title', 'Project')

@section('content')








<section id="cards">

  <article class="card">
    <h3>Name: {{$projectDatas[0]->name}}</h3>
    <p>grade: {{$projectDatas[0]->grade}}</p>
    <p>details: {{$projectDatas[0]->details}}</p>
    <p>subject: {{$projectDatas[0]->subject}}</p>
    <a id="invite-member" href="{{ route('inviteMember',$projectDatas[0]->id) }}">Join a Member</a>
    <a id="create-task" href="{{ route('createTask',$projectDatas[0]->id) }}">Create a Task</a>
    <!-- //<a class="button" href="{{url('api/createTaskPage','$id')}}"> Create a Task</a> -->
  </article>
</section>

@endsection
