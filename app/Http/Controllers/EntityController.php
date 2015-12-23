<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kind;
use App\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// eager loading the 'kind' relationship to
		// reduce the number of queries called in the view
		$entities = Entity::with(['kind' => function ($query) {
			$query->orderBy('id', 'desc');
		}])->paginate(20);

		return view('entities.index', compact('entities'));
	}

	public function individualsIndex()
	{
		$entities = Entity::whereKindId(1)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.individuals', compact('entities'));
	}
	public function groupsIndex()
	{
		$entities = Entity::whereKindId(2)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.groups', compact('entities'));
	}
	public function organizationsIndex()
	{
		$entities = Entity::whereKindId(3)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.organizations', compact('entities'));
	}
	public function locationsIndex()
	{
		$entities = Entity::whereKindId(4)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.locations', compact('entities'));
	}
	public function devicesIndex()
	{
		$entities = Entity::whereKindId(5)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.devices', compact('entities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $kinds = Kind::all();

		return view('entities.create', compact('kinds'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$entity = new Entity;
        $entity->email            = $request->email;
        $entity->family_name      = $request->family_name;
        $entity->given_name       = $request->given_name;
        $entity->title            = $request->title;
        $entity->street_address   = $request->street_address;
        $entity->extended_address = $request->extended_address;
        $entity->region           = $request->region;
        $entity->postal_code      = $request->postal_code;
        $entity->country_name     = $request->country_name;
        $entity->locality         = $request->locality;
        $entity->kind_id          = $request->kind_id;
        $entity->save();

        return redirect()->route('entities.index')
                         ->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$entity = Entity::findOrFail($id);

		return view('entities.show', compact('entity'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$entity = Entity::findOrFail($id);

		return view('entities.edit', compact('entity'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$entity = Entity::findOrFail($id);

		$entity->save();

		return redirect()->route('entities.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$entity = Entity::findOrFail($id);
		$entity->delete();

		return redirect()->route('entities.index')->with('message', 'Item deleted successfully.');
	}

}
