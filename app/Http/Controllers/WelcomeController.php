<?php namespace 

App\Http\Controllers;
use App\artikel;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array('data'=>artikel::all());
		return view('welcome')->with($data);
	}

	public function view($id)
	{
		$data = array('data'=>artikel::find($id));

		return view('artikel.view')->with($data);
	}

	// 	public function index()
	// {
	// 	$data = array('data'=>artikel::all());
	// 	return view('artikel.all')->with($data);
	// }

}
