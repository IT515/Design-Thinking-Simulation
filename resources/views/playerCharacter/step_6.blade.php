@extends('app')

@section('content')

<h1>Quote</h1>

@include('errors.list')

{!! Form::model($playerCharacter) !!}
  <p><b>A quote I want to be remembered by is:</b><p>
    {!! Form::textarea('quote') !!}
  <br>
  <button type="submit">Finish</button>
{!! Form::close() !!}

@endsection
