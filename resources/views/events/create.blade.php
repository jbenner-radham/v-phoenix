@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #eee;
    }
</style>

<div class="ui middle aligned center aligned grid" vocab="http://microformats.org/wiki/h-event">
    <div class="column">
        <!-- New VCard Form -->
        <form action="/event" method="POST" class="ui large h-event form">
            <div class="ui stacked segment">
                {{-- [Description] --}}
                <div class="field">
                    <div class="ui left icon input">
                        {{--<i class="file text icon"></i>--}}
                        <i class="book icon"></i>
                        <input type="text" class="p-description" name="description" placeholder="Description">
                    </div>
                </div>

                {{-- [Start] --}}
                <div class="field">
                    <div class="ui left icon input">
                        <i class="calendar icon"></i>
                        <input type="text" class="p-description" name="description" placeholder="Start">
                    </div>
                </div>

                {{-- [End] --}}
                <div class="field">
                    <div class="ui left icon input">
                        <i class="calendar icon"></i>
                        <input type="text" class="p-description" name="description" placeholder="End">
                    </div>
                </div>

                {{-- [Location] --}}
                <div class="field">
                    <div class="ui left icon input">
                        <i class="marker icon"></i>
                        <input type="text" class="p-location" name="location" placeholder="Location">
                    </div>
                </div>

                {{-- [URL] --}}
                <div class="field">
                    <div class="ui left icon input">
                        <i class="linkify icon"></i>
                        <input type="text" class="u-url" name="url" placeholder="URL">
                    </div>
                </div>

                {{-- [Summary] --}}
                <div class="field">
                    <div class="ui left icon input">
                        {{--<i class="ellipsis horizontal icon"></i>--}}
                        <textarea class="p-description" name="description" placeholder="Summary"></textarea>
                    </div>
                </div>


                {!! csrf_field() !!}

                <!-- Add Event Button -->
                <button class="ui large fluid teal submit button">
                    <i class="plus icon"></i> Add Event
                </button>
            </div>
        </form>
    </div> <!-- .column -->
</div>

@endsection
