<!DOCTYPE  html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page | Sopping</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $base_dir; ?>assets/frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php echo $base_dir; ?>assets/css/styles.css" rel="stylesheet" type="text/css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>


<body>

    <header>
        <!-- First navigation -->
        <div id="row1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <a class="link" href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Home
                            </a>
                        <a class="link" href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                My Account
                            </a>
                        <a class="link" href="#">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                Shopping Cart</a>
                        <a class="link" href="#">
                                <i class="glyphicon glyphicon-ok"></i>
                                Checkout</a>
                    </div>
                    <div class="col-sm-5">
                        <div class="dropdown pull-right currencyDropdown">
                            <a href="#" class=" link active dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="#">Dollar ($)</a></li>
                                <li><a href="#">Euro</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- First Navigation  End-->
        <!-- Logo container-->
        <div id="row2">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                            aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo $base_dir; ?>assets/images/logo.jpg" alt="LOGO" />
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../navbar-static-top/">Login</a></li>
                            <li><a href="../navbar-fixed-top/">Signup</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="glyphicon glyphicon-heart"></i>
                                     </a>
                                <ul class="dropdown-menu">

                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>
        <!-- Logo Container-->
        <!-- 2nd Navigation start-->
        <div id="row3">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false"
                            aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            Categories
                        </button>
                    </div>
                    <div id="navbar1" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="active" href="#">Smartphone</a></li>
                            <li><a href="#">Desktop</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Networking</a></li>
                            <li><a href="#">Software</a></li>
                        </ul>

                        <form class="navbar-form navbar-right hidden-xs">

                            <div class="form-group  pull-left">
                                <input type="text" placeholder="Search your item..." class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">
                                    <i class="glyphicon glyphicon-search"></i>

                                </button>
                        </form>
                    </div>
                    <!--/.nav-collapse -->


                </div>
            </nav>
        </div>
        <!-- 2nd Navigation end-->
    </header>