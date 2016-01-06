@extends('layouts.app')

@section('content')
    {{--
    {{ dump(current(Request::segments())) }}
    {{ dd(Request::path()) }}
    --}}
    <div class="panel-body contact">
        {{-- <https://html.spec.whatwg.org/multipage/forms.html#file-upload-state-(type=file)> --}}
        <form action="{{ route('documents.store') }}" enctype="multipart/form-data" method="POST" class="form-horizontal">
            {!! csrf_field() !!}
            <div class="form-group">
                <fieldset>
                    <legend>Document</legend>
                    <div>
                        {{-- [Document] --}}
                        <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                            <label for="document">Document</label>
                            <div>
                                <input type="file" formenctype="multipart/form-data" name="document" id="document">
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!-- Add Document Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit">
                        <i class="icon plus"></i> Add Document
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
