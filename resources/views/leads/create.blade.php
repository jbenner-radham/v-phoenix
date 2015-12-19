@extends('layouts.app')

@section('content')

<div class="panel-body lead">
    <form action="{{ route('leads.store') }}" method="POST" class="form-horizontal">
        {{-- [vCard] --}}
        @include('_includes.forms.vcard')

        <fieldset>
            <legend>Lead Details</legend>
            <div class="form-group">
                <div class="col-xs-12">
                    {{-- [Included Packing] --}}
                    <label for="include_packing" class="col-sm-3 control-label vcard-label">Include Packing</label>
                    <div class="col-sm-9">
                        <div class="checkbox">

                            {{-- @todo Fix the visual regression that occurs when this redundant `label` element is removed. --}}
                            <label>
                                <input type="checkbox" id="include_packing" name="include_packing">
                            </label>
                        </div>
                    </div>
                    {{-- [Email Opt Out] --}}
                    <label for="email_opt_out" class="col-sm-3 control-label vcard-label">Email Opt Out</label>
                    <div class="col-sm-9">
                        <div class="checkbox">

                            {{-- @todo Fix the visual regression that occurs when this redundant `label` element is removed. --}}
                            <label>
                                <input type="checkbox" id="email_opt_out" name="email_opt_out">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- [Business Line] --}}
            <div class="form-group">
                <label for="business-line" class="col-sm-3 control-label vcard-label">Business Line</label>
                <div class="col-sm-9">
                    <select class="form-control" name="business-line">
                        <option selected disabled>Choose ...</option>
                        @foreach ($business_lines as $business_line)
                            <option value="{{ $business_line->id }}">@titleize($business_line->name)</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- [Lead Source] --}}
            <div class="form-group">
                <label for="lead-source" class="col-sm-3 control-label vcard-label">Lead Source</label>
                <div class="col-sm-9">
                    <select class="form-control" id="lead-source" name="lead_sources_id">
                        <option selected disabled>Choose ...</option>
                        @foreach ($lead_sources as $lead_source)
                            <option value="{{ $lead_source->id }}">@titleize($lead_source->name)</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- [Lead Status] --}}
            <div class="form-group">
                <label for="lead-status" class="col-sm-3 control-label vcard-label">Lead Status</label>
                <div class="col-sm-9">
                    <select class="form-control" id="lead-status" name="lead_statuses_id">
                        <option selected disabled>Choose ...</option>
                        @foreach ($lead_statuses as $lead_status)
                            <option value="{{ $lead_status->id }}">@titleize($lead_status->name)</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- [Description] --}}
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label vcard-label">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control custom-control" name="description" rows="3" style="resize:none"></textarea>
                </div>
            </div>

            {!! csrf_field() !!}

            {{-- [Create/Submit Button] --}}
            <div class="col-sm-offset-3">
                <button type="submit" class="col-sm-9 btn btn-primary btn-block">Create</button>
            </div>
        </fieldset>
    </form>
</div>

@endsection
