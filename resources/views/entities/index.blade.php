@extends('layouts.app')

@section('content')

    <h1>All Entities</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Type</th>
        </tr>
        </thead>
        <tbody>
        @foreach($entities as $entity)
            <tr>
                <td>
                    <a href="{{ route('entities.show', $entity->id) }}">
                        {!! $entity->given_name . ' ' . $entity->family_name !!}
                    </a>
                </td>
                <td>{!! $entity->email !!}</td>
                <td>{{ $entity->kind->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! $entities->render() !!}
    </div>


@endsection
