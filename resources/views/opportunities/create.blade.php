@extends('layouts.app')

@section('content')

    <div class="panel-body entity" vocab="http://microformats.org/profile/hcard">
        <form action="{{ route('opportunities.store') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            {{-- [vCard] --}}
            @include('_partials.forms.vcard')

            <fieldset>
                <legend>Details</legend>
                <div>
                    <div class="form-group">
                        <label for="sales-stage-id">Sales Stage *</label>
                        <div>
                            <select id="sales-stage-id" name="sales_stage_id">
                                <option value="" selected disabled>Choose ...</option>
                                @foreach($stages as $stage)
                                    <option value="{{ $stage->id }}">@titleize($stage->name)</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- Add Opportunity Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit">
                        <i class="icon plus"></i> Add Opportunity
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
