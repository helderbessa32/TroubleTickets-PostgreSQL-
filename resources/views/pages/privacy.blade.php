
@extends('layouts.app')

@section('title', 'Cards')

@section('content')

<link rel="stylesheet" href="css/home.css" type="text/css">

<div class="faq-div1">
<br><br><br>
    <div class="faq_question">
      <p class="faq_question1">What is ManagementUnited?</p>
      <p class="faq_answer">ManagementUnited is a web application for managing projects.</p>
    </div>
    <div class="faq_question">
      <p class="faq_question1">How can i create project?</p>
      <p class="faq_answer">Just log in and then just select the "create project" option and fill the project information.</p>
    </div>
    <div class="faq_question">
      <p class="faq_question1">What is the maximum number of projects a user can have?</p>
      <p class="faq_answer">A user can have multiple projects, no limit is defined.
      </p>
    </div>
    <div class="faq_question">
      <p class="faq_question1">Being the creator of the project do I have more functions than my colleagues?</p>
      <p class="faq_answer">Yes, being the creator, you can, for example, kick a user.
      </p>
    </div>

  </div>


@endsection