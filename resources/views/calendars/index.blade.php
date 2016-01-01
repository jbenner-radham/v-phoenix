@extends('layouts.app')

@section('content')

    <h1>Calendar</h1>
    <blockquote>So timely. Much days.</blockquote>

    <section id="calendar"></section>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({});
        });
    </script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.5.0/fullcalendar.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.5.0/fullcalendar.print.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.5.0/fullcalendar.min.js"></script>

@endsection
