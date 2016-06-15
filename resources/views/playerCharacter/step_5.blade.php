@extends('app')

@section('content')

<h1>5 Year Plan</h1>

@include('errors.list')

{!! Form::model($playerCharacter) !!}
  <p><b>In five years, I see myself:</b><p>
    {!! Form::textarea('five_year_plan') !!}
  <br>
  <button type="submit">Continue</button>
{!! Form::close() !!}

@endsection
