<?php namespace vphoenix\Http\Controllers;

use vphoenix\Http\Requests;
use vphoenix\Http\Controllers\Controller;
use vphoenix\Kind;
use vphoenix\VCard;
use Illuminate\Http\Request;

class VCardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vcards = VCard::orderBy('id', 'desc')->paginate(10);

		return view('vcard.index', compact('vcards'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $types = Kind::all();

		return view('vcard.create', compact('types'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$vcard = new VCard;
        $vcard->email            = $request->email;
        $vcard->family_name      = $request->family_name;
        $vcard->given_name       = $request->given_name;
        $vcard->title            = $request->title;
        $vcard->street_address   = $request->street_address;
        $vcard->extended_address = $request->extended_address;
        $vcard->region           = $request->region;
        $vcard->postal_code      = $request->postal_code;
        $vcard->country_name     = $request->country_name;
        $vcard->locality         = $request->locality;
        $vcard->kind_id          = $request->kind_id;
        $vcard->save();

        return redirect()->route('vcard.index')
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
		$vcard = VCard::findOrFail($id);

		return view('vcard.show', compact('vcard'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vcard = VCard::findOrFail($id);

		return view('vcard.edit', compact('vcard'));
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
		$vcard = VCard::findOrFail($id);

		$vcard->save();

		return redirect()->route('vcard.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$vcard = VCard::findOrFail($id);
		$vcard->delete();

		return redirect()->route('vcard.index')->with('message', 'Item deleted successfully.');
	}

}
