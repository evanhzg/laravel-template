@section('footer')
    <footer>
        <div class="content-group">
            <a href="{{ route('homepage') }}" class="logo-white">
                <img src="{{ asset('img/Logo-EH-white.svg') }}" alt="Logo full white">
            </a>
            <nav>
                <ul>
                    <li class="nav-link"><a href="#">{{ __('legals') }}</a></li>
                    <li class="nav-link"><a href="#">{{ __('cookies') }}</a></li>
                </ul>
            </nav>
        </div>
        <p>2020-2024 Evan Hoizey. All rights reserved</p>
    </footer>
@endsection
