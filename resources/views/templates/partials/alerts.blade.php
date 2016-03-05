@if(Session::has('info'))

    <div class="alert alert-dismissible alert-info">
        {{ Session::get('info') }}
        <button data-dismiss="alert" class="close" type="button">×</button>
    </div>
@endif

@if(Session::has('info-danger'))

    <div class="alert alert-dismissible alert-danger">
        <button data-dismiss="alert" class="close" type="button">×</button>
        <h4>ОШИБКА!</h4>
        {{ Session::get('info-danger') }}
    </div>
@endif
