@extends('app')

@section('content')

<h1>5 Year Plan</h1>

@include('errors.list')

{!! Form::model($playerCharacter) !!}
    {!! Form::label('like', 'Type a like') !!}<br>
    {!! Form::text('like') !!}<br>
    <button type="submit">Submit</button>
{!! Form::close() !!}

@endsection
