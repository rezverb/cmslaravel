<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Storage;
use Illuminate\Html\FormFacade;
use Illuminate\Html\HtmlFacade;
//use Illuminate\Http\Request;
use Request;



class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function test2()
	{
		$disk = Storage::disk('local')->put('file.doc', "this is a test");
		dd($disk);
		$dir = "";
		//return view('vendor.elfinder.elfinder',compact('dir'));
	}
	public function index()
	{
		//

		$pages = Page::latest()->get();
		return view('page.index',compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{


		$pages = array();
		return view('page.create');
		return view('page.create',compact('pages'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CreatePageRequest $request)
	{

		$pages = new Page();
		$pages->create($request->all());
		return redirect('page');
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
		$page = Page::findOrFail($id);
		return view('page.edit',compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Requests\CreatePageRequest $request)
	{

		$page =  Page::findOrFail($id);
		$page->update($request->all());
		return redirect('page');
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
