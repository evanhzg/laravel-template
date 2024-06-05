@section('header')
    <header class="bottom-shadow">
        <div class="flex-row header-content">
            <a href="{{ route('homepage') }}" class="logo-full"><img src="{{ asset('img/Logo-EH.svg') }}" alt="Logo full"></a>
            <nav id="navMenu">

            </nav>
            <ul class="flex-row">
                <li class="nav-link"><a href="#">{{ __('example') }}</a></li>
                <li class="nav-link"><a href="#">{{ __('default') }}</a></li>
                <li class="nav-link"><a href="#">{{ __('menu') }}</a></li>
            </ul>
            </nav>
        </div>
    </header>
@endsection
