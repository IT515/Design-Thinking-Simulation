@extends('app')

@section('content')

<h1>Concerns</h1>

@include('errors.list')

{!! Form::model($playerCharacter) !!}
  <p><b>My biggest concern about being in this refugee camp is:</b><p>
    {!! Form::textarea('biggest_camp_concern') !!}
  <br>
  <p><b>As a refugee, I’m most concerned about:</b><p>
    {!! Form::textarea('biggest_concern') !!}
  <br>
  <button type="submit">Continue</button>
{!! Form::close() !!}

@endsection
