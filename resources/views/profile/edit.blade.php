<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- title of site -->
    <title>Profil</title>

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
        }olor:rgb(255, 30, 0);
        }
        .card {
        border: none;
        border-radius: 10px;
    }

    .card-header {
        border-radius: 10px 10px 0 0 !important;
    }

    .form-control {
        padding: 0.75rem;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .btn {
        padding: 0.75rem 2rem;
        border-radius: 5px;
        font-weight: 600;
    }

    .btn-primary {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-primary:hover {
        background-color: #004494;
        border-color: #004494;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    @media (max-width: 768px) {
        .container {
            padding: 1rem;
        }
        
        .card-body {
            padding: 1.25rem;
        }
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
<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header text-white">
                        <h4 class="mb-4 border-bottom pb-2">Profil beállítások</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" class="mb-5">
                            @csrf
                            @method('patch')

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">Név</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">Email cím</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Mentés</button>
                        </form>


                        <br>
                        <br>
                        <br>
                        <h4 class="mb-4 border-bottom pb-2">Jelszó módosítása</h4>
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="current_password" class="form-label fw-bold">Jelenlegi jelszó</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                       id="current_password" name="current_password" required>
                                @error('current_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label fw-bold">Új jelszó</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                       id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-bold">Jelszó megerősítése</label>
                                <input type="password" class="form-control" 
                                       id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-danger">Jelszó módosítása</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<section class="space-y-6">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header text-white">
                        <h4 class="mb-0">Fiók inaktíválása</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">
                            A fiók inaktíválása után nem fog tudni bejelentkezni fiókjába.
                        </p>
                        <br>
                        <button type="button" 
                                class="btn btn-danger" 
                                data-toggle="modal" 
                                data-target="#deleteAccountModal">
                            Fiók inaktíválása
                        </button>
    
                        <div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteAccountModalLabel">Biztosan törölni szeretné a fiókját?</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('profile.changeStatus') }}" id="deleteAccountForm">
                                            @csrf
                                            @method('patch')
                                            
                                            <p class="text-muted mb-4">
                                                Kérjük, adja meg jelszavát a fiók végleges inaktíválásahoz.
                                            </p>
    
                                            <div class="form-group">
                                                <label for="delete-password" class="form-label fw-bold">Jelszó</label>
                                                <input type="password" 
                                                       class="form-control @error('password', 'statusChange') is-invalid @enderror" 
                                                       id="delete-password" 
                                                       name="password" 
                                                       required>
                                                @error('password', 'statusChange')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Mégse
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteAccountForm').submit();">
                                            Fiók inaktíválása
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
