@extends('app')

@section('content')

<h3>This tutorial will help you create a character you will use throughout the project</h3>

@include('errors.list')

<p> You will be representing [Character Name] at different points throughout this project. [Gender] is a [age] year old [marital status] [profession].</p>
<p>It will be up to you to add to this profile and make this character your own.</p>
<p>Over the next few pages, you will answer some questions about this character, who [Character Name] is, what are some of [Character Name]'s likes and dislikes. Why did they make the choices they did? You are creating these answers for yourself, so answer as you would in that situation.</p>
<p>Hit go when you are ready to get started!</p>
{!! Form::open() !!}
    <button type="submit">Go!</button>
{!! Form::close() !!}

@endsection
