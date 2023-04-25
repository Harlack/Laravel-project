

<nav class="navbar navbar-expand-md navbar-light shadow-sm">
 <div class="container">
 <a class="navbar-brand" href="{{ url('/') }}">DeepTree</a>
 <a class="navbar-brand" href="{{ route('comments') }}"> Sekcja opinii </a>
 <a class="navbar-brand" href="{{ route('trees') }}"> Drzewa </a>
 
 
 <!-- Left Side Of Navbar -->
 <ul class="navbar-nav ms-auto"> </ul>
 
 <!-- Right Side Of Navbar -->
 <ul class="navbar-nav mr-auto ">
   
 <!-- Authentication Links -->
    @guest
       <li class="nav-item">
           <a class="nav-link" href="{{ route('login') }}">Logowanie</a>
       </li>
    @if (Route::has('register'))
       <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Rejestracja</a>
       </li>
    @endif

    @else
       <li class="nav-item">
            <a class="nav-link" href="#" role="button" > {{ Auth::user()->name }}
         </a>
       </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }} </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       @csrf
       </form></li>
        </div>
        </div>
    </li>
@endguest
    </ul>
    </div>
    </div>
   </nav>
