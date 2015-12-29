@extends('layouts.app')

@section('content')

    <div class="panel-body contact">
        <form action="{{ route('contacts.store') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            {{-- [vCard] --}}
            @include('_partials.forms.vcard')

            <fieldset>
                <legend>Description Information</legend>
                {{-- [Description] --}}
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label vcard-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control custom-control" name="description" rows="3" style="resize:none"></textarea>
                    </div>
                </div>

                {{-- [Create/Submit Button] --}}
                <div class="col-sm-offset-3">
                    <button type="submit" class="col-sm-9 btn btn-primary btn-block">Create</button>
                </div>
            </fieldset>
        </form>
    </div>

@endsection
