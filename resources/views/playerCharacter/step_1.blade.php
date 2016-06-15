@extends('app')

@section('content')

<h2>{{$profession}}</h2>

@include('errors.list')

{!! Form::model($playerCharacter) !!}
  <p><b>I've always liked:</p></b>
    @foreach($likes as $like)
      <li>{{$like->like}}</li>
    @endforeach
    <!-- {!! Form::label('like', 'Type a like') !!}<br> -->
    <li>{!! Form::text('like') !!}</li><br>
  <p><b>I've always disliked:</p></b>
    @foreach($dislikes as $dislike)
      <li>{{$dislike->like}}</li>
    @endforeach
    <!-- {!! Form::label('like', 'Type a like') !!}<br> -->
    <li>{!! Form::text('dislike') !!}</li><br>

  <h3>Skills (choose two)</h3>
    @foreach($skills as $skill)
      {!! Form::checkbox('skills[]', $skill->id) !!} {{ $skill->skill }}<br>
      <!-- <li>{{$skill->skill}}</li> -->
    @endforeach
    <br>
    <button type="submit">Continue</button>
{!! Form::close() !!}

@endsection
