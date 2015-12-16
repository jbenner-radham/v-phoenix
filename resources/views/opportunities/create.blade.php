@extends('layouts.app')

@section('content')
    <ul>
        @foreach($stages as $stage)
            <li>@titleize($stage->name)</li>
        @endforeach
    </ul>
@endsection
