<header class="p-3 mb-3 border-bottom">
    <div class="container"> 
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/home" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="{{asset('logo.png')}}" alt="image" width="160" height="30">
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" >
                <li><a href="/category" class="nav-link px-2 link-dark">Kategori Tempat Wisata</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Agenda Kegiatan</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Peta Jalur Lokasi</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Wishlist Wisata</a></li>
            </ul>

            <ul class="nav justify-content-center mb-md-0" style="float: right">
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
                    @if(Auth::user()->id == 1)
                        <li><a href="/locations" class="nav-link px-2 link-dark">Daftar Tempat Wisata</a></li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('profile')}}">Profile</a>
                            
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
    </div>
</header>