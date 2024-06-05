@section('header')
    <header class="bottom-shadow">
        <div class="flex-row container header-content">
            <a href="{{ route('homepage') }}" class="logo-full"><img src="{{ asset('img/Logo-EH.svg') }}" alt="Logo full"></a>
            <nav id="navMenu">
                <iconify-icon icon="material-symbols:cancel-outline" id="burgerClose"></iconify-icon>

                <ul class="flex-row">
                    <li class="nav-link hidden-lg"><a href="{{ route('homepage') }}">{{ __('accueil') }}</a></li>
                </ul>
            </nav>
            <iconify-icon icon="solar:hamburger-menu-linear" id="burgerOpen"></iconify-icon>
        </div>
    </header>
@endsection
