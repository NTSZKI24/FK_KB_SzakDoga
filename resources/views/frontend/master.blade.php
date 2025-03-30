
<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- title of site -->
    <title>Események</title>

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
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        .single-list-topics-icon img {
            width: 75px; /* Set the desired width */
            height: 75px; /* Set the desired height */
        }
    
        .page-container {
        display: flex;
        min-height: 100vh;
    }

    .sticky-sidebar {
    position: sticky;
    top: 20px;
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    margin: 20px 0;
    font-size: 14px;
}

.filter-form .form-group {
    margin-bottom: 12px;
}

.filter-form label {
    font-weight: 600;
    color: #333;
    margin-bottom: 6px;
    display: block;
    font-size: 14px;
}

.checkbox-group {
    max-height: 150px;
    overflow-y: auto;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 8px;
    background: #fff;
}

.checkbox-item {
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    font-size: 13px;
}

.filter-form .form-control {
    width: 100%;
    margin-bottom: 6px;
    height: 32px;
    padding: 4px 8px;
    font-size: 13px;
}

.filter-buttons {
    position: sticky;
    bottom: 0;
    background: #fff;
    padding: 12px 0;
    border-top: 1px solid #eee;
}

.filter-buttons .btn {
    padding: 6px 12px;
    font-size: 13px;
}

.mb-4 {
    margin-bottom: 1rem;
    font-size: 16px;
}

    .container-fluid {
        padding-left: 30px;
        padding-right: 30px;
    }
    .sticky-sidebar {
    position: sticky;
    top: 20px;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    margin: 20px 0;
}

.container-fluid {
    padding: 0 30px;
}

.single-explore-item {
    margin-bottom: 30px;
}

/* Remove if exists */
.offset-md-1 {
    margin-left: 0;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-md-4 {
    padding-right: 15px;
    padding-left: 15px;
}

.single-explore-item {
    height: 100%;
    margin-bottom: 30px;
}
// Add to your existing <style> section
.checkbox-group {
    max-height: 200px;
    overflow-y: auto;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px;
    background: #fff;
}

.checkbox-item {
    margin-bottom: 8px;
    display: flex;
    align-items: center;
}

.checkbox-item input[type="checkbox"] {
    margin-right: 8px;
}

.checkbox-item label {
    margin: 0;
    font-weight: normal;
    cursor: pointer;
}

.checkbox-group::-webkit-scrollbar {
    width: 8px;
}

.checkbox-group::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.checkbox-group::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.checkbox-group::-webkit-scrollbar-thumb:hover {
    background: #555;
}
.single-explore-img {
        height: 250px; /* Fixed height for image container */
        overflow: hidden;
        position: relative;
    }

    .single-explore-img img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* This ensures images cover the area without distortion */
        object-position: center;
    }

    /* Optional: Add a transition for smooth hover effects */
    .single-explore-img img:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }
    </style>
</head>

<body>
                

            <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{ route('events.index') }}">KF<span> Events</span></a>

                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            @auth
                                <li class="active">
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
                            <li class="active">
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
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                    
                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </section><!-- /.top-area-->

    <!-- top-area End -->

    <!--welcome-hero start -->
    <section id="home" class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt">
                <h2>Fedezd fel az eseményeket,és formáld meg a következő nagy kalandot<br>te magad! </h2>
                <p>
                    Találd meg a legjobb eseményeket, programokat, rendezvényeket és még sok mást – mindezt egyetlen kattintással! 
                </p>
            </div>
            <div class="welcome-hero-serch-box">
                <div class="welcome-hero-form">
                    <div class="single-welcome-hero-form">
                        <h3>Mit keresel?</h3>
                        <form method="GET" action="{{ route('events.search') }}" class="mt-4">
                            <input type="text" name="search" placeholder="'Kosárlabda mérkőzés'" class="px-4 py-2 border rounded-md">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--list-topics start -->
    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <img src="{{ asset('assets/images/flaticon/dumbbel.png') }}" alt="">
                            </div>
                            <h2><a href="{{ route('events.filter', ['type' => [1]]) }}">Sport</a></h2>
                            <p>{{ $events->where('types_id', 1)->count() }} esemény</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <img src="{{ asset('assets/images/flaticon/charity.png') }}" alt="">
                            </div>
                            <h2><a href="{{ route('events.filter', ['type' => [2]]) }}">Összetartás</a></h2>
                            <p>{{ $events->where('types_id', 2)->count() }} esemény</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <img src="{{ asset('assets/images/flaticon/confetti.png') }}" alt="">
                            </div>
                            <h2><a href="{{ route('events.filter', ['type' => [3]]) }}">Szórakozás</a></h2>
                            <p>{{ $events->where('types_id', 3)->count() }} esemény</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <img src="{{ asset('assets/images/flaticon/worldwide.png') }}" alt="">
                            </div>
                            <h2><a href="{{ route('events.filter', ['type' => [4]]) }}">Kulturális</a></h2>
                            <p>{{ $events->where('types_id', 4)->count() }} esemény</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <img src="{{ asset('assets/images/flaticon/scholarship.png') }}" alt="">
                            </div>
                            <h2><a href="{{ route('events.filter', ['type' => [5]]) }}">Tanulmányi</a></h2>
                            <p>{{ $events->where('types_id', 5)->count() }} esemény</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="explore" class="explore">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="welcome-hero-filter sticky-sidebar">
                        <h4 class="mb-4">Szűrők</h4>
                        <div class="welcome-hero-filter">
                            <form method="GET" action="{{ route('events.filter') }}" class="filter-form">
                                <div class="form-group">
                                    <label>Vármegye</label>
                                    <div class="checkbox-group">
                                        @foreach($counties as $county)
                                            <div class="checkbox-item">
                                                <input type="checkbox" 
                                                    name="county[]" 
                                                    id="county_{{ $county->id }}"
                                                    value="{{ $county->id }}" 
                                                    {{ in_array($county->id, (array)request('county')) ? 'checked' : '' }}>
                                                <label for="county_{{ $county->id }}">{{ $county->county }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Típus</label>
                                    <div class="checkbox-group">
                                        @foreach($types as $type)
                                            <div class="checkbox-item">
                                                <input type="checkbox" 
                                                    name="type[]" 
                                                    id="type_{{ $type->id }}"
                                                    value="{{ $type->id }}" 
                                                    {{ in_array($type->id, (array)request('type')) ? 'checked' : '' }}>
                                                <label for="type_{{ $type->id }}">{{ $type->type }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                
                                <div class="form-group">
                                    <label>Dátum között</label>
                                    <input type="date" name="date_from" class="form-control mb-2" 
                                           value="{{ request('date_from') }}" placeholder="Kezdő dátum">
                                    <input type="date" name="date_to" class="form-control" 
                                           value="{{ request('date_to') }}" placeholder="Végső dátum">
                                </div>
                
                                <div class="form-group">
                                    <label>Időpont között</label>
                                    <input type="time" name="time_from" class="form-control mb-2" 
                                           value="{{ request('time_from') }}">
                                    <input type="time" name="time_to" class="form-control" 
                                           value="{{ request('time_to') }}">
                                </div>
                
                                <div class="form-group">
                                    <label>Korhatár között</label>
                                    <input type="number" name="age_from" class="form-control mb-2" 
                                           placeholder="Minimum" value="{{ request('age_from') }}">
                                    <input type="number" name="age_to" class="form-control" 
                                           placeholder="Maximum" value="{{ request('age_to') }}">
                                </div>
                
                                <div class="filter-buttons">
                                    <button type="submit" class="btn btn-primary w-100 mb-2">Szűrés</button>
                                    <a href="{{ route('events.index') }}" class="btn btn-secondary w-100">Szűrők törlése</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-9">
                    <div class="row">
                        @foreach($events as $event)
                            <div class="col-md-4 col-sm-6">
                                <div class="single-explore-item">
                                    <div class="single-explore-img">
                                        <img src="{{ asset($event->image) }}" alt="explore image">
                                        <div class="single-explore-img-info">
                                            <div class="single-explore-image-icon-box">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-explore-txt bg-theme-1">
                                        <h2><a>{{$event->eventname}}</a></h2>
                                        <p class="explore-rating-price">
                                            <a>{{ $event->county->county }}</a>
                                            <span class="explore-price-box">
                                                <a>{{$event->eventage}}+</a>
                                            </span>
                                            <a>{{ $event->type->type }}</a>
                                        </p>
                                        <div class="explore-person">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a>Dátum:</a><p>{{$event->eventdate}} {{$event->eventtime}}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a>Helyszín:</a><p>{{$event->eventplace}}</p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <a>Leírás:</a><p>{{$event->eventdesc}}</p>
                                                </div>
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
    </section>
 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		
