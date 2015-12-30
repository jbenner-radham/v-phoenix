@extends('layouts.app')

@section('content')

    <div class="panel-body contact">
        <form action="{{ route('documents.store') }}" method="POST" class="form-horizontal">
        </form>
    </div>

@endsection
