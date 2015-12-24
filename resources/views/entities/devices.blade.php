@extends('layouts.app')

@section('content')

    <h1 class="index-title">Devices</h1>

    @include('_includes.entities.list-table')

    <div class="text-center">
        {!! $entities->render() !!}
    </div>


@endsection
