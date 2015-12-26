@extends('layouts.app')

@section('content')

<div class="panel-body lead" vocab="http://microformats.org/profile/hcard">
    <form action="{{ route('entities.store') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}

        {{-- [vCard] --}}
        @include('_partials.forms.vcard')

        <!-- Add Entity Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add vCard
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
