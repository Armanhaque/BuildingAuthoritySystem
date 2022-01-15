<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="construction is awesome bootstrap responsive construction business theme">
    <meta name="keywords" content="construction, business, construction business, responsive, parallax, business theme">
    <title>Construction</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/Pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/html5shiv.min.js"></script>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="home">

<!-- begin:header -->
<div class="header" data-parallax="scroll" data-image-src="assets/img/img-work-03.jpg">
    <!-- begin:topbar -->
    <div id="topbar" class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                </div><!-- .col-sm-8 -->
                <div class="col-sm-4 hidden-xs">
                    <div class="nav-utility nav-right">
                        <a href="#" class="nav-item"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="nav-item"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="nav-item"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="nav-item"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="nav-item"><i class="fa fa-envelope-o"></i></a>
                    </div><!-- .nav-utility -->
                </div><!-- .col-sm-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .topbar -->
    <!-- end:topbar -->

    <!-- begin:site-navigation -->
    <div class="site-header-affix-wrapper">
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="site-branding">
                        </div><!-- .site-branding -->
                    </div><!-- .col-sm-3 -->

                    <div class="col-sm-9">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false"><span class="pe-7s-menu"></span><span class="sr-only">Primary Menu</span></button>

                            <div class="menu-testing-menu-container">
                                <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                    <li class="menu-item current-menu-item"><a href="worker">Home</a></li>
                                    <li class="menu-item" aria-haspopup="true"><a href="Workershop">Shop/Office Details</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="#">Complain</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="WorkerReport">Report</a></li>
                                            <li class="menu-item"><a href="WorkerFeedback">Feedback</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </nav><!-- #site-navigation -->
                    </div><!-- .col-sm-9 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </header><!-- #masthead -->
    </div><!-- .site-header-affix-wrapper -->
    <!-- end:site-navigation -->

    <div class="col-md-3"></div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-description">
                   <h2 class="caption-subtitle">Select your Shop/office where you work.</h2>
                    <p>Make sure you select right one. Don't make any mistake</p>
                </h1>
                        <table class="table table-responsive table-bordered">
                            <thead>
                            <tr><th>Name</th>
                                <th>Details</th>
                                <th> number</th>
                                <th> Picture</th>
                                <th> Action</th>
                            </tr>

                            </thead>
                            <tbody>
                        @foreach($WorkerShop as $Wshop)
                            <tr><th>{{$Wshop['ShopName']}}</th>
                                <th>{{$Wshop['ShopDetails']}}</th>
                                <th>{{$Wshop['ShopNo']}}</th>
                                <th><img src="Uploads/SOpicture/{{$Wshop['ShopPhoto']}}" width="100" height="100" alt="No Image Given"></th>
                                <th>
                                    <form action="/selectOffice" method="post">
                                        @csrf
                                        <button type="submit" name="publicCheckIn" class="btn btn-default btn-bordered  btn-md" href="#">Select</button>
                                    </form></th>
                            </tr>

                        @endforeach
                            </tbody>
                        </table>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #header -->
<!-- end:header -->

<!-- begin:additional-info -->

    <div class="container">
        @include('footer');
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/plugins/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/parallax.min.js"></script>
<script src="assets/js/navigation.js"></script>
<script src="assets/plugins/jquery.easing.js"></script>
<script src="assets/plugins/jquery.magnific-popup.min.js"></script>
<script src="assets/plugins/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/isotope.pkgd.min.js"></script>
<script src="assets/plugins/owl.carousel.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>

</html>