@extends('layouts.app')

@section('content')

<div class="panel-body">
    <!-- New VCard Form -->
    <form action="/vcard" method="POST" class="form-horizontal">

        <!-- Email -->
        <div class="vcard">
{{--
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>

            <div class="col-sm-6">
                <input type="text" name="email" id="email" class="form-control">
            </div>
--}}
            <label>
                Email
                <input class="email" type="email" name="email">
            </label>

            <!---->

            <hr>

            <label>
                Type
                <select name="type" id="type">
                    @foreach ($types as $type)
                        @if ($type->name == 'individual')
                            {{-- Set "individual" to `selected` --}}
                            <option name="{{ $type->id }}" selected>{{ ucfirst($type->name) }}</option>
                        @else
                            <option name="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                        @endif
                    @endforeach
                </select>
            </label>

{{--
            <label for="type" class="col-sm-3 control-label">Kind</label>

            <div class="col-sm-6">
                <select name="type" id="type">
                @foreach ($types as $type)
                    @if ($type->name == 'individual')
                        <!-- Set "individual" to `selected` -->
                        <option name="{{ $type->id }}" selected>{{ ucfirst($type->name) }}</option>
                    @else
                        <option name="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                    @endif
                    @endforeach
                </select>
                {!! dump($types) !!}
            </div>
        </div>
--}}

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add VCard
                </button>
            </div>
        </div>
        {!! csrf_field() !!}
    </form>
</div>

@endsection
