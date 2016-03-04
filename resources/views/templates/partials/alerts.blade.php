@if(Session::has('info'))

    <div class="alert alert-dismissible alert-info">
        {{ Session::get('info') }}
    </div>
@endif

@if(Session::has('info-danger'))

    <div class="alert alert-dismissible alert-danger">
        {{ Session::get('info-danger') }}
    </div>
@endif
