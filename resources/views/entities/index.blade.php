@extends('layouts.app')

@section('content')

<h1>Entity Index Yoz!</h1>
<p>Fo sho yolo or bolo.</p>

@foreach($entities as $entity)
    <li>
        <a href="{{ route('entities.show', $entity->id) }}">
            {!! $entity->given_name . ' ' . $entity->family_name !!}
        </a>
    </li>
@endforeach

@endsection
