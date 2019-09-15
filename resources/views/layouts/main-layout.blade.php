
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>..:: @yield('title') - Trish Academy  ::..</title>
    <link media="all" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link media="all" href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}" type="text/css" charset="utf-8" />--}}

{{--    <style type="text/css">--}}
{{--        body{--}}
{{--            font-family: 'circular_spotify_tx_tlight';--}}
{{--        }--}}
{{--    </style>--}}
</head>
<body class="no-pad">
<div id="wrapper">
    @guest
    <header id="header" >
        @else
            <header id="header" class="loggedin-header">
        @endguest
        <div class="header-holder">
            <div class="logo">
                <a href="/"><img src="images/logo.png" width="150" height="62" alt="Trish Academy"></a>
            </div>
            <a href="#" class="nav-opener"><span></span></a>

            <!-- Authentication Links -->

                <div class="nav-holder">
                    <nav id="nav">

                        @yield('menu')

                    </nav>

                    @guest
                    <div class="btns-box">
                        <div class="btn-wrap">
                            <a class="login" href="{{ route('login') }}">{{ __('Login') }}</a> / <a class="register" href="{{ __('register') }}">{{ __('Register') }}</a>
                        </div>
                        <a class="btn" href="#marker">Become A Marker</a>
                    </div>


                </div>


                                @else
                <ul class="profile-menu">
                    <li class="d-none d-md-block">
                        <a href="profile.html" class="name">{{ Auth::user()->name }}</a>
                        <span class="score">Target score: 7.5</span>
                    </li>
                    <li class="profile_ic dropdown">
                        <a href="#" class="dropdown-toggle" role="button" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="images/header/profile_ic.jpg" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profile_dropdown">
                            <a href="#" class="dropdown-item d-md-none">Tolu Arowoselu <span class="score d-block text-left">Target score: 7.5</span></a>
                            <a class="dropdown-item" href="profile.html">Profile Settings</a>
                            <a class="dropdown-item" href="interest.html">My interests</a>
                            <a class="dropdown-item" href="plans-new-user.html">Plans</a>
                            <a class="dropdown-item" href="account-settings.html">Account settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>


                        </div>
                    </li>
                </ul>

                                @endguest

        </div>
    </header>

    @yield('content')


    <div class="get-in-touch" id="get-in-touch">
        <div class="holder">
            <div class="img-holder">
                <img src="images/img14.svg" width="837" height="516" alt="img description">
            </div>
            <form action="#" class="form">
                <div class="text-holder">
                    <h2>Get in Touch</h2>
                    <p>Leave a message, remember we are swift in response.</p>
                </div>
                <div class="row-holder">
                    <div class="form-group">
                        <label for="name">full name</label>
                        <input id="name" class="form-control" type="text" placeholder="Whats your name in full?">
                    </div>
                    <div class="form-group">
                        <label for="email">email address</label>
                        <input id="email" class="form-control" type="email" placeholder="Enter email address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">subject</label>
                    <input id="subject" class="form-control" type="text" placeholder="What's this about?">
                </div>
                <div class="form-group">
                    <label for="message">message</label>
                    <textarea id="message" class="form-control" cols="30" rows="10" placeholder="Leave your message here"></textarea>
                </div>
                <div class="btn-holder">
                    <button type="submit" class="btn has-arrow">send message</button>
                </div>
            </form>
        </div>
        <form action="#" class="newsletter">
            <strong class="heading">Stay in touch</strong>
            <div class="form-group">
                <label for="letter">Subscribe To Our Newsletter</label>
                <input id="letter" class="form-control" type="email" placeholder="Your email address">
            </div>
            <button type="submit" class="btn">Send Me Newsletters</button>
        </form>
    </div>
    </main>
    <footer id="footer">
        <div class="footer-holder">
            <span class="copyright">© 2019 <a href="#">Trish Academy</a>, Inc. All rights reserved.</span>
            <span>UI/UX by <a href="https://www.arotec.io/" target="_blank">arotec</a> | Developed by Trish Technologies</span>
            <ul class="socialnetwroks">
                <li>social media</li>
                <li><a href="#"><img src="images/facebook.png" width="60" height="60" alt="facebook"></a></li>
                <li><a href="#"><img src="images/instagram.png" width="60" height="60" alt="instagram"></a></li>
                <li><a href="#"><img src="images/twitter.png" width="60" height="60" alt="twitter"></a></li>
            </ul>
        </div>
    </footer>
</div>
<!-- Modal -->
<div class="modal fade banner-video" id="banner-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <video width="100%" height="100%" controls>
                    <source src="video/banner-video.mp4" type="video/mp4">
                    <source src="video/banner-video.ogg" type="video/ogg">
                </video>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="{{ asset('js/jquery.main.js') }}" defer></script>


<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-one-page-nav/3.0.0/jquery.nav.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
    $('.singlePageNav').onePageNav();

    $(".hamburger").click(function() {
        $(".nav-container").slideToggle();
    });

    $('.render-tooltip').tooltip();



</script>
</body>
</html>
