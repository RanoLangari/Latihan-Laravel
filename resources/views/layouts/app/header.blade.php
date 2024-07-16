<header class="py-3 mb-3 border-bottom">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
        <div>
            <a href="{{ url('/') }}" class="text-decoration-none">
                <h1 class="text-dark">Laravel 8</h1>
            </a>
        </div>
        <div class="d-flex justify-content-end">
            @if (Auth::check())
            <a href="{{ url('logout') }}" class="btn btn-primary" style="margin-right: 20px">Logout</a>
            @else
            <a href="{{ url('login') }}" class="btn btn-primary" style="margin-right: 20px">Login</a>
            <a href="{{url('register')}}" class="btn btn-primary">Register</a>
            @endif
        </div> 

    </div>
</header>