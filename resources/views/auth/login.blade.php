<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- title of site -->
    <title>Directory Landing Page</title>

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
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        .single-list-topics-icon img {
            width: 75px; /* Set the desired width */
            height: 75px; /* Set the desired height */
        }
        *:before,
    *:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
rgb(199, 52, 16),
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color:rgb(0, 0, 0);
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(22, 21, 21, 0.1);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color:rgb(39, 37, 37);
}
button{
    margin-top: 50px;
    width: 100%;
    background-color:rgb(204, 28, 28);
    color:rgb(255, 255, 255);
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
    </style>
</head>

<body>
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
                                <li class="">
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
                            <li class="">
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
                                <li class="active">
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
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h3>Login Here</h3>

        <label for="email" :value="__('Email')">Email</label>
        <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <label for="password" :value="__('Password')" >Password</label>
        <input type="password" name="password" required autocomplete="current-password">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <button>Log In</button>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>