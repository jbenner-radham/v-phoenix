@if (Session::get('flash_message'))
    <div id="master-alert" class="alert alert-success alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('flash_message') }}
    </div>
@endif

@if (Session::get('danger_flash_message'))
    <div id="master-alert" class="alert alert-danger alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('danger_flash_message') }}
    </div>
@endif