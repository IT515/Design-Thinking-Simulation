@extends('app')

@section('content')

<form action="mediacontent/{{$MediaEdit->id}}" method="PATCH" role="form">
	<legend>Media Edit</legend>

	<div class="form-group">
		<label for="">Current Description: {{$MediaEdit->description}}</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection