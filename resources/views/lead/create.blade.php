@extends('layouts.app')

@section('content')

<div class="panel-body lead">
    {{-- [Include Packing] --}}
    <label>Include Packing <input type="checkbox" name="include_packing"></label>

    <br>

    {{-- [Email Opt Out] --}}
    <label>Email Opt Out <input type="checkbox" name="email_opt_out"></label>

    <br>

    {{-- [Business Line] --}}
    <label>
        Business Line
        <select name="business-line">
            @foreach ($business_lines as $business_line)
                <option value="{{ $business_line->id }}">@titleize($business_line->name)</option>
            @endforeach
        <select>
    </label>

    <br>

    {{-- [Lead Source] --}}
    <label>
        Lead Source
        <select name="lead-source">
            @foreach ($lead_sources as $lead_source)
                <option value="{{ $lead_source->id }}">@titleize($lead_source->name)</option>
            @endforeach
        <select>
    </label>

    <br>

    {{-- [Lead Status] --}}
    <label>
        Lead Status
        <select name="lead-status">
            @foreach ($lead_statuses as $lead_status)
                <option value="{{ $lead_status->id }}">@titleize($lead_status->name)</option>
            @endforeach
        <select>
    </label>

    <br>

    {{-- [Description] --}}
    <label>
        Description
        <textarea name="description"></textarea>
    </label>
</div>

@endsection
