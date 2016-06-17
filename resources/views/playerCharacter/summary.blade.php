@extends('app')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">Here is your Character Profile</div>
  <div class="panel-body">
    <table class="table table-bordered">
      <tr>
        <td rowspan="4"><img src="/images/kyloren.jpg" alt="Profile Picture" class="img-rounded"></td>
        <td colspan="2"><pnsp><b>Name: </b>{{$character->name}}</td></pnsp>
      </tr>
      <tr>
        <td colspan="2"><pnsp><b>Age: </b>{{$character->age}}</td></pnsp>
      </tr>
      <tr>
        <td colspan="2"><pnsp><b>Marital Status: </b>{{$character->marital_status}}</td></pnsp>
      </tr>
      <tr>
        <td colspan="2"><pnsp><b>Profession: </b>{{$profession}}</pnsp><br>
          <pnsp>The reason I became a {{$profession}} is {{$playerCharacter->reason_for_profession}}</pnsp>
        </td>
      </tr>
      <!-- <tr>
        <td colspan="3">The reason I became a {{$profession}} was {{$character->reason_for_profession}}</td>
      </tr> -->
      <tr>
        <td>
          <pnsp><b>I am skilled in:</b></pnsp>
          @foreach ($skills as $skill)
            <li></pnsp class="small">{{$skill}}</pnsp></li>
          @endforeach
        </td>
        <td>
          <pnsp><b>I have always liked:</b></pnsp>
          @foreach ($likes as $like)
            <li></pnsp class="small">{{$like}}</pnsp></li>
          @endforeach
        </td>
        <td>
          <pnsp><b>I have always disliked:</b></pnsp>
          @foreach ($dislikes as $dislike)
            <li></pnsp class="small">{{$dislike}}</pnsp></li>
          @endforeach
        </td>
      </tr>
      <tr>
        <td colspan="3"><pnsp>I made sure to grab {{$one_item}} because {{$playerCharacter->item_reason}}</pnsp></td>
      </tr>
      <tr>
        <td colspan="3"><pnsp>My biggest concern about this camp is {{$playerCharacter->biggest_camp_concern}}</pnsp></td>
      </tr>
      <tr>
        <td colspan="3"><pnsp>My biggest concern about being a refugee is {{$playerCharacter->biggest_concern}}</pnsp></td>
      </tr>
      <tr>
        <td colspan="3"><pnsp>In five years, I see myself {{$playerCharacter->five_year_plan}}</pnsp></td>
      </tr>
      <tr>
        <td colspan="3"><pnsp>The quote I want to be remembered by is {{$playerCharacter->quote}}</pnsp></td>
      </tr>
    </table>
  </div>
</div>

@endsection
