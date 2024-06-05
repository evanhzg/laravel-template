@section('footer')
    <footer>
        <div class="content-group">
            <a href="{{ route('homepage') }}" class="logo-white">
                <img src="{{ asset('img/Logo-EH-white.svg') }}" alt="Logo full white">
            </a>
            <nav>
                <ul>
                    <li class="nav-link"><a href="#">{{ __('mentions légales') }}</a></li>
                    <li class="nav-link"><a href="#">{{ __('cookies') }}</a></li>
                </ul>
            </nav>
        </div>
        <p>2020-2024 evan-hoizey. All rights reserved</p>
    </footer>
@endsection
