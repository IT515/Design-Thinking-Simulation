@extends('app')

@section('content')

<h1>Step 1</h1>

@include('errors.list')

{!! Form::model($personalizeCharacter) !!}
    {!! Form::label('name', 'What is your name?') !!}<br>
    {!! Form::text('name') !!}<br>
    <button type="submit">Submit</button>
{!! Form::close() !!}

@endsection
