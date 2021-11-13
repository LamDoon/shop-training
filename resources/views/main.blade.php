<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    @include('head')
</head>
<body>
<!----start-container----->
<div class="header-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo"><a href="index.html"><img src="/assets/main/images/logo.png" alt=""/></a></div>
            </div>
            <div class="col-md-8">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header"><span class="text-left"><a href="#">MENU</a></span>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <div class="btn-group show-on-hover">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            Categories<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">New arrivals</a></li>
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Accessories</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="right">
                    <ul class="list-unstyled">
                        <li class="a text-left"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a> $2,534,5435</li>
                        <li><a href="#">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!----start-images-slider---->
            <!-- Single button -->

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!----start-images-slider---->
            <div class="images-slider">
                <div id="fwslider">
                    <div class="slider_container">
                        <div class="slide">
                            <img src="/assets/main/images/img.jpg" alt=""/>
                            <div class="slide_content">
                                <div class="slide_content_wrap">
                                    <p class="description">New Arrivals</p>
                                    <h4 class="title">Bags & Shoes</h4>
                                    <p class="description"><a href="#">Browse collection</a></p>
                                    <div class="slide-btns description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="/assets/main/images/img.jpg" alt=""/>
                            <div class="slide_content">
                                <div class="slide_content_wrap">
                                    <p class="description">New Arrivals</p>
                                    <h4 class="title">Bags & Shoes</h4>
                                    <p class="description"><a href="#">Browse collection</a></p>
                                    <div class="slide-btns description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/slide -->
                    </div>
                    <div class="timers"> </div>
                    <div class="slidePrev"><span> </span></div>
                    <div class="slideNext"><span> </span></div>
                </div>
                <!--/slider -->
            </div>
        </div>
    </div>
</div>
<!----//End-container----->
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Featured Products</h2>
            </div>
        </div>

        <div class="row">
            @foreach($products as $product)
            <div class="col-md-2">
                <div class="grid">
                    <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                                <img src="/upload/products/{{ $product->image }}" height="150px" width="150px" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="/assets/main/images/link-ico.png" alt=""/></h2>
                                </div></a>
                        </div>
                    </div>
                    <p class="text-center">{{ $product->name }}</p>
                    <h2 class="text-center">{{ $product->price }}</h2>
                    <p class="text-center"><a href="details.html">Buy</a></p>
                </div>
            </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
    <div class="top">
        <div class="row">
            <div class="col-md-4">
                <div class="grid">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus Quisque posuere diam et est hendrerit, eget sodales lectus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid">
                    <h2>Our Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus Quisque posuere diam et est hendrerit, eget sodales lectus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid1 pull-left">
                    <h2>Contact</h2>
                    <address>
                        <p>tryd online service</p>
                        <p>12345 main street</p>
                        <p>Newyork</p>
                        <p><a href="#">info#@mystore.com</a></p>
                        <p>555-58746-5475</p>
                    </address>
                </div>
                <div class="grid2 pull-right">
                    <div class="social-icons-set">
                        <ul>
                            <li><a class="facebook" href="#"> </a></li>
                            <li><a class="twitter" href="#"> </a></li>
                            <li><a class="vimeo" href="#"> </a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline pull-left">
                    <li><a href="#">Terms of Services</a></li>
                    <li><a href="#">Refunds</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <form class="navbar-form pull-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="Find" class="btn btn-default">Find</button>
                </form>
            </div>
        </div>
        <div class="copy-right text-center">
            <p>&#169Copyright 2014 All Rights Reserved  Template <a href="http://w3layouts.com/">  w3layouts.com</a></p>
        </div>
    </div>
</div>

</body>
</html>

