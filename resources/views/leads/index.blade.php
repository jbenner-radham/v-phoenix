@extends('layouts.app')

@section('content')

    <h1 class="index-title">Leads Index Yoz!</h1>

    <a class="btn btn-default pull-right index-title" href="{{ route('leads.create') }}">Create a Lead</a>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($leads as $lead)
            <tr>
                <td>{!! $lead->entity->given_name . ' ' . $lead->entity->family_name !!}</td>
                <td>{!! $lead->entity->email !!}</td>
                <td>
                    <a class="btn btn-default" href="{{ route('leads.show', $lead->id) }}">View Details</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! $leads->render() !!}
    </div>

@endsection
