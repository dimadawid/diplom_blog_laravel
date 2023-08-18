<header class="market-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="/assets/front/images/version/market-logo.png" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.single', ['slug' => 'nauka']) }}">Наука</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.single', ['slug' => 'finansy']) }}">Финансы</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.single', ['slug' => 'yumor']) }}">Юмор</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.single', ['slug' => 'kriptovalyuta']) }}">Криптовалюта</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/weather') }}"> API Погода в минске</a>
                    </li>
                    
                    
                    
                    
                    
                </ul>
  
                <form class="form-inline" method="get" action="{{ route('search') }}">
                    <input name="s" class="form-control mr-sm-2 @error('s') is-invalid @enderror" type="text" placeholder="Чем тебе помочь?" required>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>

                <style>
                    .market-header .form-inline .form-control.is-invalid{
                        border: 2px solid red;
                    }
                </style>

            </div>
            
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-2 py-2 sm:block">
                    @auth
           
           <span>Привет, {{ Auth::user()->name }} </span>|<a href="{{ url('/logout')}}"> Выйти</a>
                            <!--<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>-->
                        
                    @else
                        <a href="{{ route('login') }}" class="">Войти</a>
                        <a href="{{ url('/register')}}" class="ml-0 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-0 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
        </nav>
        
    </div><!-- end container-fluid -->
  
</header><!-- end market-header -->
