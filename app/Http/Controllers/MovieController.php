<?php namespace App\Http\Controllers;

use App\Movie;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\HttpResponse;
use Carbon\Carbon;

use Illuminate\Http\Request;

class MovieController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::paginate(24);

		return view('movies.index', compact('movies'));
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

}
