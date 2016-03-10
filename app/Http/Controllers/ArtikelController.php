<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\artikel;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArtikelController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = \DB::select('select *from artikels where id_artikel="menu2" && id_user='.\Auth::user()->id.'');
		// $data = array('data'=>Auth::user()->id); 
		return view('artikel.all')->with('data',$data);
	}

	public function search()
	{

		$data = \DB::select('select *from artikels where id_artikel="menu1" && title like "%'.$_POST['search'].'%" 
			&& id_user='.\Auth::user()->id.'');
		// $data = array('data'=>Auth::user()->id); 
		return view('artikel.search')->with('data',$data);
	}
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$data = \DB::select('select *from artikels where id_artikel="menu2" && id_user='.\Auth::user()->id.'');
		return view('artikel.add')->with('data', $data);
	}

	public function add_menu1()
	{	
		return view('artikel.add_menu1');
	}

	public function menu1()
	{	
		$data = \DB::select('select *from artikels where id_artikel="menu1" && id_user='.\Auth::user()->id.'');
		return view('artikel.menu1')->with('data', $data);
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function save()
	{
		
		$artikel = new artikel;
		$artikel->id_user = Auth::user()->id;
		$artikel->title = Input::get('title');
		$artikel->content = Input::get('content');
		$artikel->slug = str_slug(input::get('title'));
		$artikel->id_artikel = Input::get('id_artikel');

		if(Input::hasfile('pict')){
			$pict = date("YmdHis")
			.uniqid()
			."."
			.Input::file('pict')->getClientOriginalExtension();

			Input::file('pict')->move(storage_path(),$pict);
			$artikel->pict = $pict;
		}

		$artikel->save();

		return redirect(url('all_artikel'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = array('data'=>artikel::find($id));

		//dd($data);

		return view('artikel/edit')->with($data);
	}

	public function edit_menu1($id)
	{
		$data = array('data'=>artikel::find($id));

		//dd($data);

		return view('artikel/edit_artikel_menu1')->with($data);
	}

	public function view($id)
	{
		$data = array('data'=>artikel::find($id));

		return view('artikel.view')->with($data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

		public function update()
	{
		$artikel = artikel::find(Input::get('id'));
		$artikel->id_user = Auth::user()->id;
		$artikel->title = Input::get('title');
		$artikel->content = Input::get('content');
		$artikel->slug = str_slug(Input::get('title'));
		$artikel->id_artikel = Input::get('id_artikel');

		//upload file
		if(Input::hasFile('pict')){
			$pict = date("YmdHis")
			.uniqid()
			."."
			.Input::file('pict')->getClientOriginalExtension();
		
			Input::file('pict')->move(storage_path(),$pict);
			$artikel->pict = $pict;
		}

		$artikel->save();

		return redirect(url('all_artikel'));
	}

	public function artikel_menu1_update()
	{
		$artikel = artikel::find(Input::get('id'));
		$artikel->id_user = Auth::user()->id;
		$artikel->title = Input::get('title');
		$artikel->content = Input::get('content');
		$artikel->slug = str_slug(Input::get('title'));
		$artikel->id_artikel = Input::get('id_artikel');

		//upload file
		if(Input::hasFile('pict')){
			$pict = date("YmdHis")
			.uniqid()
			."."
			.Input::file('pict')->getClientOriginalExtension();
		
			Input::file('pict')->move(storage_path(),$pict);
			$artikel->pict = $pict;
		}

		$artikel->save();

		return redirect(url('menu1'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	public function destroy($id)
	{
		artikel::find($id)->delete();
		return redirect(url('all_artikel'));
	}

}
