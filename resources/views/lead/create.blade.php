@extends('layouts.app')

@section('content')

<div class="panel-body">
    {{-- [Include Packing] --}}
    <label>Include Packing <input type="checkbox" name="include_packing"></label>

    <br>

    {{-- [Business Line] --}}
    <label>
        Business Line
        <select>
            @foreach ($business_lines as $business_line)
                <option style="text-transform: capitalize">{{ $business_line->name }}</option>
            @endforeach
        <select>
    </label>
</div>

@endsection
