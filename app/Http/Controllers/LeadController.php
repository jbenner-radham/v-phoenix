<?php

namespace App\Http\Controllers;

use App\BusinessLine;
use App\Http\Requests;
use App\Kind;
use App\Http\Controllers\Controller;
use App\LeadSource;
use App\LeadStatus;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('leads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $business_lines = BusinessLine::all();
        $lead_sources   = LeadSource::all();
        $lead_statuses  = LeadStatus::all();
        $kinds          = Kind::all();

        return view('leads.create', compact('business_lines', 'lead_sources', 'lead_statuses', 'kinds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
