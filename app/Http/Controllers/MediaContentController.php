<?php namespace App\Http\Controllers;

use App\mediacontent;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MediaContentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$MediaContents = mediacontent::get()->all();


		return view ('mediacontent', compact('MediaContents'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//mediacontent/create

		

		return 'create specific media';

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//  

		$newMedia = new mediacontent([
			'description' => $request ->get('description')

			]);

		$newMedia->save();

		return redirect('mediacontent');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// GET -> /questions/id
		return 'show specific media1111' ;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//// GET -> /images/id/edit
		$MediaEdit = mediacontent::findorfail($id);
		
		//compact allows you to send a variable to a view
		return view('mediacontent.edit', compact('MediaEdit'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// PUT/PATCH /images/id

		

		return view('');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// DELETE -> /questions/id
		mediacontent::find($id)->delete();
		//return "you are on the delete page";
		return redirect('mediacontent');
	}

}