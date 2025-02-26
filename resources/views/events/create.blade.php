<header>
    <title>Esemeny letrehozas</title>
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
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
                    <a class="navbar-brand" :href="route('events.index')">KF<span> Events</span></a>

                </div><!--/.navbar-header-->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        @auth
                            <li>
                            <x-nav-link :href="route('events.index')">
                                    {{ __('Esemenyek') }}
                            </x-nav-link>
                        </li>
                        <li  class="active">
                            <x-nav-link :href="route('events.create')">
                                    {{ __('Esemeny letrehozasa') }}
                            </x-nav-link>
                        </li>
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
<div class="container" id="creationform">
    <div class="col-sm-12">
    <div class="text">
       Hozz letre egy esemenyt
    </div>
    <form action="#">
       <div class="form-row">
          <div class="input-data">
             <input type="text" required>
             <div class="underline"></div>
             <label for="">Esemeny neve</label>
          </div>
          <div class="input-data">
             <input type="text" required>
             <div class="underline"></div>
             <label for="">Esemeny korhatara</label>
          </div>
       </div>
       <div class="form-row">
          <div class="input-data">
             <input type="text" required>
             <div class="underline"></div>
             <label for="">Esemeny datuma</label>
          </div>
          <div class="input-data">
             <input type="text" required>
             <div class="underline"></div>
             <label for="">Esemeny idopontja</label>
          </div>
       </div>
       <div class="form-row">
        <div class="input-data">
            <div class="select">
            <select name="counties_id">
                @foreach($counties as $county)
                    <option value="{{ $county->id }}">{{ $county->county }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="input-data">
                <input type="file" name="image">
        </div>
     </div>
       <div class="form-row">
       <div class="input-data textarea">
          <textarea rows="8" cols="80" required></textarea>
          <br />
          <div class="underline"></div>
          <label for="">Esemeny leirasa</label>
          <br />
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