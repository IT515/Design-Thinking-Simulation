<?php namespace App\Http\Controllers;

use App\ideate;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use Request;
use Response;
use Input;

class IdeateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ideate = DB::table('ideates')->where('groupId', '=', Auth::user()->groupId)->get();
		$groupName = DB::table('groups')->select('groupName')->where('id', '=', Auth::user()->groupId)->get();
		$projectNames = DB::table('projects')->select('id', 'projectName')->where('groupId', '=', Auth::user()->groupId)->get();

		//dd($groupName);

		return view('ideate', compact('ideate', 'projectNames', 'groupName'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{

		if(Request::ajax()) {

			ideate::create([
				'userId' => Auth::user()->id,
				'groupId' =>Auth::user()->groupId,
				'projectId' => Request::input('project'),
				'title' => Request::input('title'),
				'thought' => Request::input('thought'),
				'image' => 'image'
			]);

			return "this is ajax";
		}

		return "this isn't ajax";
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
