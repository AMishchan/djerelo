<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

     
        <!-- Styles -->

        <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/bootstrap/js/bootstrap.js') }}" rel="stylesheet">
       

	    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/media.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">

		<script src="{{asset('libs/jquery/jquery-2.1.1.min.js') }}"></script>
        <script src="{{asset('libs/owlcarousel/assets/vendors/jquery.min.js') }}"></script>    
        <script src="{{asset('libs/owlcarousel/owl.carousel.js') }}"></script>
        <link href="{{ asset('calendear/tcal.css') }}" rel="stylesheet">
        <script src="{{asset('calendear/tcal.js') }}"></script>
        <script src="{{asset('calendear/modernizr.custom.js') }}"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	
	
    </head>
   <header>




    <div class="container">
        <div class="dropdown pull-right lang-container">
            <button class="btn btn-default dropdown-toggle lang-btn" type="button" data-toggle="dropdown">UKR
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">EN</a></li>
                <li><a href="#">UKR</a></li>

            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-2 main-top-menu">


            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="collapse navbar-collapse cl-effect-7" id="myNavbar" >
                        <ul class="nav navbar-nav">

                            <li><a href="/">Головна</a></li>
                            <li><a href="catalog">Каталог номерів</a></li>
                            <li><a href="feetback">Відгуки</a></li>
                            <li><a href="contacts">Контакти</a></li>

                       

                        </ul>
                      
                    </div>
                </div>
            </nav>

        </div>

    </div>
</header>


<body>
        @yield('content')
        
</body>
<footer>

    <script>
        $(document).ready(function() {
            var owl1 = $('.top-slider');
            owl1.owlCarousel({

                items : 1,
                margin: 0,
                nav: true,
                loop: true,
                animateOut: 'fadeOut',
                autoplay:true,
                lazyLoad:true,
                navText:["<i class=\"glyphicon glyphicon-menu-left\"></i>","<i class=\"glyphicon glyphicon-menu-right\"></i>"]
            });
            var owl2 = $('.apt-card-slider');
            owl2.owlCarousel({

                items : 3,
                margin: 3,
                nav: true,
                loop: true,
                navText:["<i class=\"glyphicon glyphicon-menu-left\"></i>","<i class=\"glyphicon glyphicon-menu-right\"></i>"]

            })
            var owl3 = $('.review-slider');
            owl3.owlCarousel({
                items : 1,
                margin: 3,
                nav: true,
                loop: true,
                navText:["<i class=\"glyphicon glyphicon-menu-left\"></i>","<i class=\"glyphicon glyphicon-menu-right\"></i>"]


            })
            var owl4 = $('.rooms-cat-slider');
            owl4.owlCarousel({
                items : 2,
                margin: 3,
                nav: true,
                loop: true,
                navText:["<i class=\"glyphicon glyphicon-menu-left\"></i>","<i class=\"glyphicon glyphicon-menu-right\"></i>"]


            })
        });
        $('.dropdown-toggle').dropdown();

    </script>

</footer>

    </html>
