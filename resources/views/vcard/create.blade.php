@extends('layouts.app')

@section('content')

<div class="panel-body" vocab="http://microformats.org/profile/hcard">
    <!-- New VCard Form -->
    <form action="/vcard" method="POST" class="form-horizontal">
        <div class="vcard">

            <!-- Email -->
            <label>
                Email <input class="email" type="email" name="email">
            </label>

            <hr>

            <!-- N -->
            <span class="n">

                <!-- Family Name -->
                <label>
                    Family Name <input type="text" class="family-name" name="family-name">
                </label>

                <hr>

                <!-- Given Name -->
                <label>
                    Given Name <input type="text" class="given-name" name="given-name">
                </label>
            </span> <!-- .n -->

            <hr>

            <!-- Title -->
            <label>
                Title <input type="text" class="title" name="title">
            </label>

            <hr>

            <!-- ADR -->
            <span class="adr">

                <!-- Street Address -->
                <label>
                    Street Address <input type="text" class="street-address" name="street-address">
                </label>

                <hr>

                <!-- Extended Address -->
                <label>
                    Extended Address <input type="text" class="extended-address" name="extended-address">
                </label>

                <hr>

                <!-- Region -->
                <label>
                    Region <input type="text" class="region" name="region">
                </label>

                <hr>

                <!-- Postal Code -->
                <label>
                    Postal Code <input type="text" class="postal-code" name="postal-code">
                </label>

                <hr>

                <!-- Country Name -->
                <label>
                    Country Name <input type="text" class="country-name" name="country-name">
                </label>

                <hr>

                <!-- Locality -->
                <label>
                    Locality <select class="locality" name="locality">
                        <option selected>en-US</option>
                        <option>en-CA</option>
                        <option>fr-CA</option>
                    </select>
                </label>
            </span> <!-- .adr -->

            <hr>

            <!-- Kind -->
            <label>
                Kind <select class="kind" name="kind">
                    @foreach ($types as $type)
                        @if ($type->name == 'individual')
                            {{-- Set "individual" to `selected` --}}
                            <option value="{{ $type->id }}" selected>{{ ucfirst($type->name) }}</option>
                        @else
                            <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                        @endif
                    @endforeach
                </select>
            </label>

            {!! csrf_field() !!}

            <!-- Add vCard Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add vCard
                    </button>
                </div>
            </div>
        </div> <!-- .vcard -->
    </form>
</div>

@endsection
