@extends('app')

@section('content')

<h2>{{$profession}}</h2>

@include('errors.list')

<!-- <form> -->
  {!! Form::model($playerCharacter) !!}
    <div class="form-group">
      <label>I've always liked:</label>
        @foreach($likes as $like)
          <li>{{$like->like}}</li>
        @endforeach
        <!-- {!! Form::label('like', 'Type a like') !!}<br> -->
        <li>{!! Form::text('like') !!}</li><br>
        <!-- <input type="text" class="form-control" id="like" name="like" value="{{Input::old('like')}}"></input> -->
    </div>
    <div class="form-group">
      <label>I've always disliked:</label>
        @foreach($dislikes as $dislike)
          <li>{{$dislike->like}}</li>
        @endforeach
        <!-- {!! Form::label('like', 'Type a like') !!}<br> -->
        <li>{!! Form::text('dislike') !!}</li><br>
    </div>
    <div class="form-group">
      <h3>Skills (choose two)</h3>
        @foreach($skills as $skill)
          {!! Form::checkbox('skills[]', $skill->id) !!} {{ $skill->skill }}<br>
          <!-- <li>{{$skill->skill}}</li> -->
        @endforeach
        <br>
        <button type="submit">Continue</button>
    </div>
  {!! Form::close() !!}
<!-- </form> -->
@endsection
