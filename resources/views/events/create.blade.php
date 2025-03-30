<header>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Esemény letréhozás</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
   
    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!--linear icon css-->
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!--flaticon.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!--slick.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}">
    
    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!--responsive.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <style>
        .dropdown-menu a {
            color: #859098;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }
        .dropdown-menu a:hover {
            background-color: #f8f9fa;
            color:rgb(255, 30, 0);
        }
        .dropdown-menu form a {
            color: #859098;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
        }
        .dropdown-menu form a:hover {
            background-color: #f8f9fa;
            color:rgb(255, 30, 0);
        }

.error-message {
    color: rgb(255, 30, 0);
    font-size: 12px;
    margin-top: 5px;
    display: block;
}



    </style>
</header>
<section class="top-area">
    <div class="header-area">
        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('events.index') }}">KF<span> Events</span></a>

                </div>

                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        @auth
                            <li>
                            <x-nav-link :href="route('events.index')">
                                    {{ __('események') }}
                            </x-nav-link>
                        </li>
                        <li class="active">
                            <x-nav-link :href="route('events.create')">
                                    {{ __('esemény letrehozasa') }}
                            </x-nav-link>
                        </li>
                        @endauth
                        @guest
                        <li>
                            <x-nav-link :href="route('events.index')">
                                    {{ __('események') }}
                            </x-nav-link>
                        </li>
                        @endguest
                        @auth
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <form action="">
                                        <a href="{{ route('profile.edit') }}">
                                            {{ __('Profil') }}
                                        </a>
                                    </form>
                                    </li>
                                    <li>
                                    <form action="">
                                        <a href="{{ route('myevents.index') }}">
                                            {{ __('Sajat eseményeim') }}
                                        </a>
                                    </form>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                         this.closest('form').submit();">
                                                {{ __('Kijelentkezés') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                        @guest
                            <li>
                                <x-nav-link :href="route('login')">
                                    {{ __('Bejelentkezés') }}
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('register')">
                                    {{ __('Regisztráció') }}
                                </x-nav-link>
                            </li>
                        @endguest
                    </ul>
                </div>
                
            </div>
        </nav>
    </div>
    <div class="clearfix"></div>

</section>

<div class="container create-form" id="creationform">
    <div class="col-sm-12">
    <div class="text">
       Hozz létre egy eseményt
    </div>
    <form method="post" action="{{route('events.store')}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
       <div class="form-row">
          <div class="input-data">
             <input type="text" name="eventname" required>
             <div class="underline"></div>
             <label for="">Esemény neve</label>
          </div>
          <div class="input-data">
             <input type="number" name="eventage" required min="0" max="99">
             <div class="underline"></div>
             <label for="">Korhatár</label>
          </div>
       </div>
       <div class="form-row">
          <div class="input-data">
            <label for="">Dátum</label>
            <br>
             <input type="date" name="eventdate" required>
             <div class="underline2"></div>
          </div>
          <div class="input-data">
            <label for="">Időpont</label>
            <br>
             <input type="time" name="eventtime" required>
             <div class="underline2"></div>
          </div>
       </div>
       <div class="form-row">
        <div class="input-data">
            <div class="select">
            <select name="counties_id" required>
                <option value="" disabled selected>Válassz vármegyét</option>
                @foreach($counties as $county)
                <option value="{{ $county->id }}">{{ $county->county }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="input-data">
            <div class="select">
                <select name="types_id" required>
                    <option value="" disabled selected>Válassz típust</option>
                    @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                    @endforeach
                </select>
                </div>
        </div>
     </div>
     <div class="form-row">
       <div class="input-data">
       <input type="text" name="eventplace" required>
          <div class="underline"></div>
          <label for="">Helyszín</label>
       </div>
       <label class="file-label">Kép feltöltése (PNG, JPG, JPEG)</label>
       <div class="input-data">
        <input type="file" name="image" accept=".png,.jpg,.jpeg" required>
        <div class="underline"></div>
        @error('image')
            <span class="error-message">{{ $message }}</span>
        @enderror
    </div>
     </div>
     <div class="form-row">
        <div class="input-data">
        <input type="text" name="eventdesc" required>
           <div class="underline"></div>
           <label for="">Esemény leírása</label>
          </div>
          </div>
          <div class="form-row submit-btn">
             <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="Létrehozás">
             </div>
          </div>
    </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 