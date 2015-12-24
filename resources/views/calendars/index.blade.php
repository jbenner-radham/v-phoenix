@extends('layouts.app')

@section('content')

    <h1>Calendar Index Yoz!</h1>
    <p>So timely. Much days.</p>

    <h2>{{ current($days)->month }}</h2>

    @include('_includes.calendars.week')

    <ol>
        @foreach($days as $day)
            <li>[[ {{ strtolower($day->month) }}-{{ sprintf('%02u', $day->ofMonth) }} ]] {!! dump($day) !!}{{--{{ $day }} - {{ $dt->dayOfWeek }}--}}</li>
        @endforeach
    </ol>

    <script id="json-calendar" type="application/json">
        {!! json_encode($days, JSON_PRETTY_PRINT)  !!}
    </script>

@endsection
