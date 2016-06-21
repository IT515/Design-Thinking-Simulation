@extends('app')

@section('content')

<h1>Main Reason</h1>

@include('errors.list')

{!! Form::model($playerCharacter) !!}
  <p><b>The main reason I became a {{$profession}} is because:</b><p>
    {!! Form::textarea('reason_for_profession') !!}
  <br>
  <button type="submit">Continue</button>
{!! Form::close() !!}

@endsection
