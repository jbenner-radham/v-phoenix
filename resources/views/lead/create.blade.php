@extends('layouts.app')

@section('content')

<div class="panel-body lead">
    {{-- [Include Packing] --}}
    <label>Include Packing <input type="checkbox" name="include_packing"></label>

    <br>

    {{-- [Business Line] --}}
    <label>
        Business Line
        <select name="business-line">
            @foreach ($business_lines as $business_line)
                <option>@titleize($business_line->name)</option>
            @endforeach
        <select>
    </label>

    <br>

    {{-- [Lead Source] --}}
    <label>
        Lead Source
        <select name="lead-source">
            @foreach ($lead_sources as $lead_source)
                <option>@titleize($lead_source->name)</option>
            @endforeach
        <select>
    </label>
</div>

@endsection
