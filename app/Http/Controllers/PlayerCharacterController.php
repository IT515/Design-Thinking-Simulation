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
    return view('playerCharacter.index');
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
      return view('playerCharacter.step_'.$step, ['playerCharacter' => $request->session()->get('playerCharacter')]);
  }

  public function postPlayerCharacterStep(Request $request, $step)
  {
      switch ($step)
      {
          case 1:
              $rules = ['name' => 'required|min:2|max:50'];
              break;
          case 2:
              $rules = ['color' => 'required|min:3'];
              break;
          case 3:
              $rules = ['pet' => 'required|in:Cats,Dogs'];
              break;
          default:
              abort(400, "No rules for this step!");
      }

      $this->validate($request, $rules);

      $request->session()->get('playerCharacter')
          ->update($request->all())
      ;

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
