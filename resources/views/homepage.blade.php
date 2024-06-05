@extends('layout')
@section('content')
    <main class="homepage">
        <h1>Default H1 title</h1>
        <h2>Default H2 title</h2>
        <h3>Default H3 title</h3>

        <p>Default content to be placed here. </p>
        <p><a href="#">Links</a> can be implemented with a native styling.</p>

        <h3>Default Buttons</h3>
        <div class="buttons flex-row">
            <button>Classic Button</button>
            <div class="btn">Div Button</div>
            <button class="rounded-btn">Rounded Button</button>
            <button class="rounded-btn filled-btn">Filled Button</button>

        </div>

        <h3>Animated Buttons</h3>
        <div class="buttons flex-row">
            <button class="rounded-btn animated-btn-circle">Pop circle</button>
            <button class="rounded-btn animated-btn-arrow">Moving arrow</button>
        </div>

        <h3>Localized Buttons</h3>
        <div class="buttons flex-row">
            <button class="rounded-btn accent-btn">Accent Button</button>
            <button class="select-btn">Selectable Button</button>
            <button class="rounded-btn action-btn">Action Button</button>
        </div>

    </main>
@endsection
