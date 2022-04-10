
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                   @guest
                    <li class="nav-item">
                         <a class="nav-link" href="#">{{ __('LOCKTEC') }}</a>
                    </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#">{{ __('ABOUT US') }}</a>
                    </li>
                   <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  Products
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>
                                        <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>
                                        <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>
                                        <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>
                                        <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>

                                </div>
                            </li>
                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  APPLICATION
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>
                                        <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>
                                        <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>
                                        <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>
                                        <a class="dropdown-item" href="#">
                                        {{ __('ACTIONS') }}
                                    </a>

                                </div>
                            </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#">{{ __('LOCKER BULIDER') }}</a>
                    </li>
                       <li class="nav-item">
                         <a class="nav-link" href="#">{{ __('CONTACT') }}</a>
                    </li>
                       <li class="nav-item">
                         <a class="nav-link" href="#">{{ __('NEWS') }}</a>
                    </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#">{{ __('SERVICES') }}</a>
                    </li>

                  @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        