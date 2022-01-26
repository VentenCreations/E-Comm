<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">E-Kakanin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('category') }}">Category</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('cart') }}">Cart
              <span class="badge badge-pill bg-primary  cart-count">0</span>
          </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('wishlist') }}">Wishlist
              <span class="badge badge-pill bg-success wishlist-count">0</span>
          </a> 
        </li>
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
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{ Auth::user()->name }}
                          </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                              <a class="dropdown-item" href="{{ url('my-orders') }}">My Orders</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">My Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item"  href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                  </form>
                            </li>   
              @endguest
      </ul>
    </div>
  </div>
</nav> -->



 <nav class="navbar navbar-expand-lg fixed-top navbar-primary" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}">E-Kakanin</a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a
              href="{{ url('/') }}">Home</a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-times-circle"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item p-0">
             <a class="nav-link" href="{{ url('category') }}">Category</a> 
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" href="{{ url('cart') }}">Cart
                <span class="badge badge-pill bg-primary  cart-count">0</span>
            </a> 
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" href="{{ url('wishlist') }}">Wishlist
                <span class="badge badge-pill bg-success wishlist-count">0</span>
            </a> 
          </li>
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
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{ Auth::user()->name }}
                          </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                              <a class="dropdown-item" href="{{ url('my-orders') }}">My Orders</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">My Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item"  href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                  </form>
                            </li>   
              @endguest
      </div>
    </div>
  </nav>

