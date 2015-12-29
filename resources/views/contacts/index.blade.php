@extends('layouts.app')

@section('content')

    <h1 class="index-title">Contacts Index Yoz!</h1>

    <a class="btn btn-default pull-right index-title" href="{{ route('contacts.create') }}">Create a Contact</a>

@endsection
