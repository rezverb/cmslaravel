<?php namespace App\Http\Controllers;

use App\Container;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class ContainerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$containers = Container::all();
		return view('container.index',compact('containers'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('container.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CreateContainerRequest $request)
	{
		Container::create($request->all());
		redirect('container.index');

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
			$container = Container::FindorFail($id);
			return view('container.edit',compact('container'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Requests\CreateContainerRequest $request)
	{
			$container = Container::FindorFail($id);
			$container->update($request->all());
			return redirect('cont');

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
