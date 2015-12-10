@extends('layouts.app')

@section('content')

    <h1>Event Index Yoz!</h1>
    <p>Fo sho yolo or bolo.</p>

    @foreach($events as $event)
        <li>
            <a href="{{ route('event.show', $event->id) }}">{!! $event->description !!}</a>
        </li>
    @endforeach

@endsection
