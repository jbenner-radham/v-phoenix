@extends('layouts.app')

@section('content')

    <h1 class="index-title">Locations</h1>

    @include('_includes.entities.list-table')

    <div class="text-center">
        {!! $entities->render() !!}
    </div>


@endsection
