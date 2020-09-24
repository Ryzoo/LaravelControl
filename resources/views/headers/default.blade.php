<header>
    <nav class="white z-depth-0">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <img src="images/logo.svg" alt="laravel Control Logo">
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="black-text {{Route::currentRouteName() == 'about' ? 'active' : ''}}" href="{{route('about')}}">{{__('About')}}</a></li>
                    <li><a class="black-text {{Route::currentRouteName() == 'price' ? 'active' : ''}}" href="{{route('price')}}">{{__('Price')}}</a></li>
                    <li><a class="black-text {{Route::currentRouteName() == 'doc' ? 'active' : ''}}" href="{{route('doc')}}">{{__('Doc')}}</a></li>
                    <li><a class="black-text" href="#soon">{{__('Login')}}</a></li>
                    <li><a class="waves-effect waves-light red lighten-1 btn" href="#soon">{{__('Use Free')}}</a></li>
                    <li class="lang-select-container">
                        <div class="input-field">
                            <form action="{{route('language')}}" method="POST">
                                @csrf
                                <select name="lang" class="lang-select" onchange="this.form.submit()">
                                    <option value="en" {{App::isLocale('en') ? "selected" : ""}}>EN</option>
                                    <option value="pl" {{App::isLocale('pl') ? "selected" : ""}}>PL</option>
                                </select>
                            </form>
                        </div>
                    </li>
                </ul>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger right"><i class="material-icons black-text">menu</i></a>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
        <li><a class="black-text {{Route::currentRouteName() == 'about' ? 'active' : ''}}" href="{{route('about')}}">{{__('About')}}</a></li>
        <li><a class="black-text {{Route::currentRouteName() == 'price' ? 'active' : ''}}" href="{{route('price')}}">{{__('Price')}}</a></li>
        <li><a class="black-text {{Route::currentRouteName() == 'doc' ? 'active' : ''}}" href="{{route('doc')}}">{{__('Doc')}}</a></li>
        <li><a class="black-text" href="#soon">{{__('Login')}}</a></li>
        <li><a class="waves-effect waves-light red lighten-1 btn" href="#soon">{{__('Use Free')}}</a></li>
        <li class="lang-select-container">
            <div class="input-field">
                <form action="{{route('language')}}" method="POST">
                    @csrf
                    <select name="lang" class="lang-select" onchange="this.form.submit()">
                        <option value="en" {{App::isLocale('en') ? "selected" : ""}}>EN</option>
                        <option value="pl" {{App::isLocale('pl') ? "selected" : ""}}>PL</option>
                    </select>
                </form>
            </div>
        </li>
    </ul>
</header>