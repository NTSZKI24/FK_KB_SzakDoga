<header>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Esemeny letrehozas</title>
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
            color: #333;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
        }
        .dropdown-menu a:hover {
            background-color: #f8f9fa;
            color:rgb(255, 30, 0);
        }
        .dropdown-menu form a {
            color: #333;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
        }
        .dropdown-menu form a:hover {
            background-color: #f8f9fa;
            color:rgb(255, 30, 0);
        }

    </style>
</header>
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
                                        {{ __('Esemenyek') }}
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('events.create')">
                                        {{ __('Esemeny letrehozasa') }}
                                </x-nav-link>
                            </li>
                            @endauth
                            @guest
                            <li class="active">
                                <x-nav-link :href="route('events.index')">
                                        {{ __('Esemenyek') }}
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
                                                {{ __('Profile') }}
                                            </a>
                                        </form>
                                        </li>
                                        <li>
                                        <form action="">
                                            <a href="{{ route('myevents.index') }}">
                                                {{ __('Sajat esemenyeim') }}
                                            </a>
                                        </form>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                             this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endauth
                            @guest
                                <li>
                                    <x-nav-link :href="route('login')">
                                        {{ __('Login') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link :href="route('register')">
                                        {{ __('Register') }}
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

<div class="container create-form" id="creationform">
    <div class="col-sm-12">
    <div class="text">
       Hozz letre egy esemenyt
    </div>
    <form method="post" action="{{url('/myevents/update',$event->id)}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
       <div class="form-row">
          <div class="input-data">
             <input type="text" name="eventname" required value="{{$event->eventname}}">
             <div class="underline"></div>
             <label for="">Esemeny neve</label>
          </div>
          <div class="input-data">
             <input type="text" name="eventage" required value="{{$event->eventage}}">
             <div class="underline"></div>
             <label for="">Esemeny korhatara</label>
          </div>
       </div>
       <div class="form-row">
          <div class="input-data">
             <input type="text" name="eventdate" required value="{{$event->eventdate}}">
             <div class="underline"></div>
             <label for="">Esemeny datuma</label>
          </div>
          <div class="input-data">
             <input type="text" name="eventtime" required value="{{$event->eventtime}}">
             <div class="underline"></div>
             <label for="">Esemeny idopontja</label>
          </div>
       </div>
       <div class="form-row">
        <div class="input-data">
            <div class="select">
                <select name="counties_id">
                    @foreach($counties as $county)
                        <option value="{{ $county->id }}" {{ $event->counties_id == $county->id ? 'selected' : '' }}>
                            {{ $county->county }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="input-data">
            <div class="select">
                <select name="types_id">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ $event->types_id == $type->id ? 'selected' : '' }}>
                            {{ $type->type }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
     <div class="form-row">
       <div class="input-data">
       <input type="text" name="eventplace" required value="{{$event->eventplace}}">
          <div class="underline"></div>
          <label for="">Esemeny helye</label>
       </div>
       <div class="input-data">
        @if($event->image)
            <p class="current-image-name">Current image: {{ basename($event->image) }}</p>
        @endif
        <input type="file" name="image">
        <input type="hidden" name="current_image" value="{{ $event->image }}">
    </div>
     </div>
       <div class="form-row">
       <div class="input-data">
       <input type="text" name="eventdesc" required value="{{$event->eventdesc}}">
          <div class="underline"></div>
          <label for="">Esemeny leirasa</label>
         </div>
         </div>
          <div class="form-row submit-btn">
             <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="submit">
             </div>
          </div>
    </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 