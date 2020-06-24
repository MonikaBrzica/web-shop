<nav class="custom-navbar">
    <div class="center">
        <div class="page-list">
            <a href="{{route ('home-page')}}">Početna</a>
        </div>
        <div class="page-list">O nama</div>
        <div class="page-list">
            <a href="{{route ('shop')}}">Shop</a>
        </div>
        <div class="page-list">Kontakt</div>
    </div>
    <div class="right">
        @guest
        <div class="no-auth">
            <div><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></div>
            <div><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></div>
        </div>
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item">Profil</a>
                @if (Auth::user()->role_id == 1)
                <a href="{{ route('admin-index') }}" class="dropdown-item">{{ __('app.admin_panel') }}</a>
                @endif
                <a class="dropdown-item" href="{{route('cart')}}">
                    Košarica
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('app.logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </div>
        </li>
        @endguest
    </div>
</nav>