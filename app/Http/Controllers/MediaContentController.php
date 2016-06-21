<?php namespace App\Http\Controllers;

use App\mediacontent;
use App\User;

//use Request;
use Response;
use \Input as Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Auth as Auth;

use Illuminate\Html\HtmlServiceProvider;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;

use File;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use \Image as Image;

//use Illuminate\Http\Request;

class MediaContentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Users = User::get()->all();
		$MediaContents = mediacontent::get()->all();


		return view ('mediacontent', compact('MediaContents', 'Users'));
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

//Takes an given image and uploads it to the server.
	public function upload()
	{
		
		if (Input::hasFile('file')) {
			$file = Input::File('file');
			$file->move('images', $file->getClientOriginalName());
			echo '<img src="images/' . $file->getClientOriginalName() . ' " />';

			/*
			$image = \Image::make(\Input::File('file'));
			$path = public_path().'/images/Test/';
			$image->save($path.$file->getClientOriginalName());
			$iamge->resize(900, 650);
			$image->save($path.$file->getClientOriginalName());
			*/

		}
		else
		{
			echo "no file found";
		}

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if (Input::hasFile('file')) {
			$file = Input::File('file');
			$file->move('images', $file->getClientOriginalName());

			/*
			$image = \Image::make(\Input::File('file'));
			$path = public_path().'/images/Test/';
			$image->save($path.$file->getClientOriginalName());
			$iamge->resize(900, 650);
			$image->save($path.$file->getClientOriginalName());
			*/

		}
		else
		{
			dd("No file found, please go back and try again.");
		}

		$newMedia = new mediacontent([
			'userID' => Auth::user()->id,
			'description' => $request ->get('description'),
			'path' => $file->getClientOriginalName()
			

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
