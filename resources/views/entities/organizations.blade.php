@extends('layouts.app')

@section('content')

    <h1 class="index-title">Organizations</h1>

    @include('_includes.entities.list-table')

    <div class="text-center">
        {!! $entities->render() !!}
    </div>


    @include('_partials.delete-confirmation')
@endsection

@section('bottom_scripts')
    <script src="{{ asset('js/delete-confirm-modal.js') }}"></script>
@endsection
