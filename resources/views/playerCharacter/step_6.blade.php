@extends('app')

@section('content')

<h1>Quote</h1>

@include('errors.list')

{!! Form::model($playerCharacter) !!}
    {!! Form::label('like', 'Type a like') !!}<br>
    {!! Form::text('like') !!}<br>
    <button type="submit">Submit</button>
{!! Form::close() !!}

@endsection
