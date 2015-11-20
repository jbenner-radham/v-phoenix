@extends('layouts.app')

@section('content')

<div class="panel-body">
    <!-- New VCard Form -->
    <form action="/vcard" method="POST" class="form-horizontal">

        <!-- Email -->
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
                <input type="text" name="email" id="email" class="form-control">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add VCard
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
