<?php namespace App\Http\Controllers;

use App\Kind;
use App\Entity;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewEntityRequest;

class EntityController extends Controller {

	/**
	 * Display entities... all 'kinds'
	 *
	 *  @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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

	/**
	 * Display entities of kind 'individual'
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function individualsIndex()
	{
		$entities = Entity::whereKindId(1)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.individuals', compact('entities'));
	}

	/**
	 * Display entities of kind 'group'
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function groupsIndex()
	{
		$entities = Entity::whereKindId(2)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.groups', compact('entities'));
	}

	/**
	 * Display entities of kind 'organization'
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function organizationsIndex()
	{
		$entities = Entity::whereKindId(3)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.organizations', compact('entities'));
	}

	/**
	 * Display entities of kind 'location'
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function locationsIndex()
	{
		$entities = Entity::whereKindId(4)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.locations', compact('entities'));
	}

	/**
	 * Display entities of kind 'device'
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function devicesIndex()
	{
		$entities = Entity::whereKindId(5)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.devices', compact('entities'));
	}

	/**
	 * Display entities of kind 'application'
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function applicationsIndex()
	{
		$entities = Entity::whereKindId(5)->orderBy('family_name', 'asc')->paginate(20);

		return view('entities.applications', compact('entities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $kinds = Kind::all();
		$entity = (object) NULL;

		return view('entities.create', compact('kinds', 'entity'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param StoreNewEntityRequest|Request $request
	 * @return Response
	 */
	public function store(StoreNewEntityRequest $request)
	{
		unset($request['_token']);
        $entity = Entity::create($request->all());

        return redirect()->route('entities.show', $entity->id)
                         ->with('message', 'Item created successfully.');
	}

	/**
	 * Display an individual entity record
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
	 * Show the form for editing an entity
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$entity = Entity::findOrFail($id);
		$kinds = Kind::all();

		return view('entities.edit', compact('entity', 'kinds'));
	}

	/**
	 * Update the specified entity in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$entity = Entity::findOrFail($id);
		$entity->fill($request->all());
		$entity->save();

		return redirect()->route('entities.show', $id)->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified entity from storage.
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
