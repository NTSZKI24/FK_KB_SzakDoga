<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- title of site -->
    <title>Saját eseményeim</title>

    <!-- For favicon png -->
   
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
        .single-explore-img {
        height: 250px;
        overflow: hidden;
        position: relative;
    }

    .single-explore-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .single-explore-img img:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }
    </style>
</head>
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
                        <li>
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
                            <li class="dropdown active">
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
<section id="explore" class="explore">
    <div class="container">
        <div class="explore-content">
            <div class="row">
                @foreach($events as $event)
                <div class=" col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="{{ asset($event->image) }}" alt="explore image">
                            <div class="single-explore-img-info">
                                <div class="single-explore-image-icon-box">
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-1">
                            <h2><a >{{"$event->eventname"}}</a></h2>
                            <p class="explore-rating-price">
                                <a>{{ $event->county->county }}</a>
                                <span class="explore-price-box">
                                    <a >{{$event->eventage}}+</a>
                                </span>
                                 <a>{{ $event->type->type }}</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a>Dátum:</a><p>{{"$event->eventdate"}} {{"$event->eventtime"}}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <a>Helyszín:</a><p>{{"$event->eventplace"}}</p>
                                </div>
                                <div class="col-sm-12">
                                    <a>Leírás</a><p>{{"$event->eventdesc"}}</p>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <form action="{{route('myevents.edit',$event->id)}}" method="GET">
                                        <button class="editButton" href="">Szerkesztés</button>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <form action="{{route('event-delete',$event->id)}}" method="POST">
                                        @csrf
                                        <button class="deleteButton" type="submit">Törlés</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
