@extends('layouts.app')

@section('content')

    <h1>Calendar Index Yoz!</h1>
    <p>So timely. Much days.</p>

    <ol>
        @foreach($days as $day)
            <li>{!! dump($day) !!}{{--{{ $day }} - {{ $dt->dayOfWeek }}--}}</li>
        @endforeach
    </ol>

@endsection
