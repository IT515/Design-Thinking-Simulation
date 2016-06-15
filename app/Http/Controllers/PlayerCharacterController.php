<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PlayerCharacter;
use Illuminate\Support\Facades\Auth;

class PlayerCharacterController extends Controller
{
  protected $lastStep = 6;

  public function getPlayerCharacter() {
    $id = Auth::user()->id;
    $PlayerCharacter = PlayerCharacter::find($id);
    $CharacterName = $PlayerCharacter->character->name;
    $temp = explode(' ', $CharacterName);
    $FirstName = array_shift($temp);
    $Gender = $PlayerCharacter->character->gender;
    $Age = $PlayerCharacter->character->age;
    $MaritalStatus = $PlayerCharacter->character->marital_status;
    $Profession = $PlayerCharacter->profession->profession;
    return view('playerCharacter.index',['CharacterName'=>$CharacterName, 'Gender'=>$Gender, 'Age'=>$Age, 'MaritalStatus'=>$MaritalStatus, 'Profession'=>$Profession, 'FirstName'=>$FirstName]);
  }

  public function postPlayerCharacter(Request $request)
  {
    $id = Auth::user()->id;

    // $charVideos = DB::table('playerCharacterVideo')->where('chapter', '=', $current_day)->get();

    $PlayerCharacter = PlayerCharacter::firstOrCreate(['user_id' => $id]);
    $request->session()->put('playerCharacter', $PlayerCharacter);

    return redirect()->action('PlayerCharacterController@getPlayerCharacterStep', ['step' => 1]);
  }

  public function getPlayerCharacterStep(Request $request, $step)
  {
    $id = Auth::user()->id;
    $PlayerCharacter = PlayerCharacter::find($id);
    $profession = $PlayerCharacter->profession->profession;

    switch ($step){
      case 1:
        $likes = $PlayerCharacter->profession->like_dislikes->where('like_dislike', 'like');
        $dislikes = $PlayerCharacter->profession->like_dislikes->where('like_dislike', 'dislike');
        $skills = $PlayerCharacter->profession->skills;
        return view('playerCharacter.step_'.$step,
                  [ 'playerCharacter' => $request->session()->get('playerCharacter'),
                    'profession'=>$profession,
                    'likes'=>$likes,
                    'dislikes'=>$dislikes,
                    'skills'=>$skills]);
      case 2:
        $one_item = $PlayerCharacter->profession->one_items;
        return view('playerCharacter.step_'.$step,
                  [ 'playerCharacter' => $request->session()->get('playerCharacter'),
                    'one_items'=>$one_item]);
      case 3:
        return view('playerCharacter.step_'.$step,
                  [ 'playerCharacter' => $request->session()->get('playerCharacter'),
                    'profession'=>$profession]);
      case 4:
      case 5:
      case 6:
      default:
        return view('playerCharacter.step_'.$step, ['playerCharacter' => $request->session()->get('playerCharacter')]);
    }
    return view('playerCharacter.step_'.$step, ['playerCharacter' => $request->session()->get('playerCharacter')]);
  }

  public function postPlayerCharacterStep(Request $request, $step)
  {
    $id = Auth::user()->id;
    $PlayerCharacter = PlayerCharacter::find($id);

      switch ($step)
      {
          case 1:
              $rules = ['like' => 'required',
                        'dislike' => 'required',
                        'skills' => 'array|size:2'];
              break;
          case 2:
              $rules = ['one_items_id' => 'required',
                        'item_reason' => 'required'];
              break;
          case 3:
              $rules = ['reason_for_profession' => 'required'];
              break;
          default:
              abort(400, "No rules for this step!");
      }

      $this->validate($request, $rules);

      switch ($step){
        case 1:
          $skillArray = $request->skills;
          $PlayerCharacter->skill_1_id = $skillArray[0];
          $PlayerCharacter->skill_2_id = $skillArray[1];
          $PlayerCharacter->save();
          break;
        // case 2:
        //   $itemArray = $request->one_item;
        //   $PlayerCharacter->one_item_id = $itemArray[0];
        //   $PlayerCharacter->save();
      }

      $request->session()->get('playerCharacter')->update($request->all());

      if ($step == $this->lastStep) {
          return redirect()->action('PlayerCharacterController@getPlayerCharacterDone');
      }

      return redirect()->action('PlayerCharacterController@getPlayerCharacterStep', ['step' => $step+1]);
  }
  public function getPlayerCharacterDone()
  {
      return '<h1>Thanks! You have completed the survey</h1>';
  }
  public function postPlayerCharacterStepOne(Request $request)
  {
      $this->validate($request, [
          'like' => 'required'
      ]);

      $request->session()->get('playerCharacter')
          ->update($request->only('like'))
      ;

      return $request->session()->get('playerCharacter');
  }
}
