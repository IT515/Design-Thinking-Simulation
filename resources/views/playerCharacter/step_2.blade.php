@extends('app')

@section('content')

<h1>One Item</h1>

@include('errors.list')

{!! Form::model($playerCharacter) !!}
  <p><b>The one thing I made sure to bring with me was:</b></p>
    @foreach($one_items as $one_item)
      {!! Form::radio('one_items_id', $one_item->id) !!} {{ $one_item->item }}<br>
    @endforeach
  <br>
  <p><b>I made sure to grab this because:</b><p>
    {!! Form::textarea('item_reason') !!}
  <br><br>
  <button type="submit">Continue</button>
{!! Form::close() !!}

@endsection
