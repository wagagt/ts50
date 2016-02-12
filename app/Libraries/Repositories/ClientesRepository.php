<?php

namespace App\Libraries\Repositories;


use App\Models\Clientes;
use Illuminate\Support\Facades\Schema;

class ClientesRepository
{

	/**
	 * Returns all Clientes
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Clientes::all();
	}

	public function search($input)
    {
        $query = Clientes::query();

        $columns = Schema::getColumnListing('clientes');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores Clientes into database
	 *
	 * @param array $input
	 *
	 * @return Clientes
	 */
	public function store($input)
	{
		return Clientes::create($input);
	}

	/**
	 * Find Clientes by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Clientes
	 */
	public function findClientesById($id)
	{
		return Clientes::find($id);
	}

	/**
	 * Updates Clientes into database
	 *
	 * @param Clientes $clientes
	 * @param array $input
	 *
	 * @return Clientes
	 */
	public function update($clientes, $input)
	{
		$clientes->fill($input);
		$clientes->save();

		return $clientes;
	}
	
	/**
	 * Return list of Clientes to fill option
	 * @return Clientes
	 */
	public function optionList()
	{
		return Clientes::orderBy('nombre')->lists('nombre', 'id');
	}
	
}