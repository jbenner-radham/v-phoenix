<?php

namespace App\Http\Controllers;

use Carbon;
use App\Kind;
use App\Lead;
use App\Entity;
use App\LeadSource;
use App\LeadStatus;
use App\BusinessLine;
use App\Http\Requests;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of all Leads
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::with(
            ['entity' => function ($query) {
                $query->orderBy('id');
            }])->paginate(20);
        return view('leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new lead
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
     * Store a newly created lead in storage
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

        $lead = new Lead;
        $lead->description       = $request->description;
        $lead->email_opt_out     = $request->input('email_opt_out', 'off');
        $lead->include_packing   = $request->input('include_packing', 'off');
        $lead->lead_sources_id   = $request->lead_sources_id;
        $lead->lead_statuses_id  = $request->lead_statuses_id;
        $lead->entity_id         = $entity->id;
        $lead->save();

        return redirect()->route('leads.index')
                         ->with('message', 'Lead created successfully.');
    }

    /**
     * Display the specified Lead.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lead = Lead::with(['entity'])->findOrFail($id);

        return view('leads.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified Lead.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified Lead in storage.
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
     * Remove the specified Lead from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
