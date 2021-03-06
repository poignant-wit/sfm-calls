<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img  src="http://sila.fm/images/new/audioroliki-radioroliki.gif"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            @if(Auth::check())
                <ul class="nav navbar-nav navbar-left">

                    <li><a href="{{ route('order.create') }}">Новый заказ</a></li>
                    <li><a href="">Поиск заказа</a></li>
                    </ul>
            @endif

            <ul class="nav navbar-nav navbar-right">

                @if(Auth::check())

                    <li><a href="{{ route('auth.signout') }}">Выйти</a></li>

                    @else

                <li><a href="{{ route('auth.signin') }}">Войти</a></li>
                <li><a href="{{ route('auth.signup') }}">Регистрация</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>