

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" id="mainNavbar">

    <a class="navbar-brand" href="/">AUTH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav mr-auto">
              @guest
                <li id="initial" class="nav-item">
                  <a class="nav-link" href="#inicio">
                      Inicio
                  </a>
                </li>
              @else
                <li id="initial" class="nav-item">
                  <a class="nav-link" href="{{ route('messages.create') }}">
                      Enviar Mensaje
                  </a>
                </li>
                <li id="initial" class="nav-item">
                  <a class="nav-link" href="{{ route('messages.index') }}">
                      Mensajes
                  </a>
                </li>
              @endguest
            </ul>

            <ul class="navbar-nav navbar-right ">
                    <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flag"></i>
                        Idioma
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Euskara</a>
                        <a class="dropdown-item active" href="#">Castellano</a>
                      </div>
                    </li>
                    @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="/login" data-target="#loginModal">
                            <i class="fa fa-sign-in"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/register" data-target="#registerModal">
                            <i class="fa fa-user-plus"></i>
                            Registro
                        </a>
                    </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profile">
                                    {{ __('Mi perfil') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>
