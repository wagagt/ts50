<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateComentariosRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\ComentariosRepository;
use App\Libraries\Repositories\ProyectosRepository;
use Mitul\Controller\AppBaseController;
use App\Http\Controllers\App\Comentarios;
use Response;
use Flash;
use Auth;
use App\Models;
use Carbon\Carbon;

class ComentariosController extends AppBaseController
{

	/** @var  ComentariosRepository */
	private $comentariosRepository;
	private $proyectosRepository;

	function __construct(ComentariosRepository $comentariosRepo, ProyectosRepository $proyectosRepo)
	{
		$this->comentariosRepository = $comentariosRepo;
		$this->proyectosRepository = $proyectosRepo;
	}

	/**
	 * Display a listing of the Comentarios.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();
		// $result = $this->comentariosRepository->search($input);
		// //dd($result[0][0]->proyecto->cliente->nombre);
		// $comentarios = $result[0];
		// $attributes = $result[1];
		$comentarios = \DB::table('comentarios')->orderBy('created_at', 'desc')->paginate(25);
		//$comentarios = \Comentarios::paginate(25);
		$comentarios->setPath($request->url());

		return view('comentarios.index')
		    ->with('comentarios', $comentarios);
		    //->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Comentarios.
	 *
	 * @return Response
	 */
	public function create()
	{
		/* Add select options */
		$proyectos_options = $this->proyectosRepository->optionList();
		return view('comentarios.create')
		->with('proyecto_options', $proyectos_options);
	}

	/**
	 * Store a newly created Comentarios in storage.
	 *
	 * @param CreateComentariosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateComentariosRequest $request)
	{
        $input = $request->all();
		$comentarios = $this->comentariosRepository->store($input);
		Flash::message('Comentarios agregados exitosamente.');

		if (isset($input['pathReturn']) && $input['pathReturn']=='proyecto'){
			return redirect('proyectos/'.$input['id_proyecto'] );
		}

		return redirect(route('comentarios.index'));
	}

	/**
	 * Display the specified Comentarios.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$comentarios = $this->comentariosRepository->findComentariosById($id);

		if(empty($comentarios))
		{
			Flash::error('Comentarios not found');
			return redirect(route('comentarios.index'));
		}

		return view('comentarios.show')->with('comentarios', $comentarios);
	}

	/**
	 * Show the form for editing the specified Comentarios.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$comentarios = $this->comentariosRepository->findComentariosById($id);
		/* Add select options */
		$proyectos_options = $this->proyectosRepository->optionList();

		if(empty($comentarios))
		{
			Flash::error('Comentarios not found');
			return redirect(route('comentarios.index'));
		}

		return view('comentarios.edit')
		->with('comentarios', $comentarios)
		->with('proyecto_options', $proyectos_options);
	}

	/**
	 * Update the specified Comentarios in storage.
	 *
	 * @param  int    $id
	 * @param CreateComentariosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateComentariosRequest $request)
	{
		$comentarios = $this->comentariosRepository->findComentariosById($id);

		if(empty($comentarios))
		{
			Flash::error('Comentarios not found');
			return redirect(route('comentarios.index'));
		}

		$comentarios = $this->comentariosRepository->update($comentarios, $request->all());

		Flash::message('Comentarios updated successfully.');

		return redirect(route('comentarios.index'));
	}

	/**
	 * Remove the specified Comentarios from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy(Request $request)
	{
		$input = $request->all();
		$id = $request['comentario_id'];
		$proyecto_id = $request['proyecto_id'];
		$comentarios = $this->comentariosRepository->findComentariosById($id);
		if(empty($comentarios))
		{
			Flash::error('Comentarios not found');
			return redirect(route('comentarios.index'));
		}
		$comentarios->delete();
		Flash::message('Comentario borrado exitosamente.');
		return redirect()->action('ProyectosController@show', [$proyecto_id]);
	}

}
