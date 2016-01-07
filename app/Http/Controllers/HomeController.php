<?php 
namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//dd(\Auth::user()->id_rol);
		if (\Auth::user()->id_rol == 1 ){  // if is Admin
 			return view('home');   //Admin view
		}else{
			//$proyects = App\Client::find(1)->comments()->where('title', 'foo')->first();
			//dd(\Auth::user());
			$proyectos = \DB::table('proyectos')->where('id_cliente',\Auth::user()->id_cliente)->get();
			//dd($proyectos);
			return view('clientes.home')
			->with('proyectos',$proyectos)
			->with('title','Control Panel')
			->with('subTitle', 'Dashboard');
		}
	}

}
