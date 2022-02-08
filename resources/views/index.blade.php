<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 6 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vitrine</title>

	<!-- Font css  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('storage/VITRINE/fonts/fonts.css') }}">

    <!-- Fontawesome css      -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('storage/VITRINE/css/normalize.css') }}">

    <!-- Bootstrap css      -->
    <link rel="stylesheet" href="{{ asset('storage/VITRINE/css/bootstrap.css') }}">

    <!-- Owncarousel css      -->
    <link rel="stylesheet" href="{{ asset('storage/VITRINE/css/owl.carousel.css') }}">

	<!-- image zoom -->
	<link rel="stylesheet" href="{{ asset('storage/VITRINE/css/glasscase.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/VITRINE/css/glasscase.minf195.css') }}">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/VITRINE/css/style.css') }}" media="screen" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/VITRINE/css/extralayers.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/VITRINE/rs-plugin/css/settings.css') }}" media="screen" />

    <!-- Main css   -->
    <link rel="stylesheet" href="{{ asset('storage/VITRINE/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/VITRINE/css/responsive.css') }}">

	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('storage/VITRINE/images/apple-touch-icon-precomposed.png') }}">
	<link rel="shortcut icon" type="image/png" href="{{ asset('storage/VITRINE/images/favicon.png') }}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  HEADER-AREA  -->
	<header class="entire_header">
       @include('layouts.partials.vitrine.header')
	</header>
    <!-- Header-AREA END -->


    <!-- MAIN-SLIDER-AREA -->
    <div class="main_slider">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('storage/VITRINE/images/slider1.png') }}" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption black_heavy_60 skewfromleftshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="133" data-speed="500" data-start="1850" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Fashion for men
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div style="text-align:left;">That this group would somehow form a family that's the way we all became the
                                <br/> Brady Bunch. Love exciting and new. Come aboard were expecting you. Love life's
                                <br/> sweetest reward Let it flow it floats back to you! </div>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption green_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10"
			data-x="50"
			data-y="290"
			data-speed="1000"
			data-start="3900"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-end="10200"
data-endspeed="1000"
			style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#"><img src="{{ asset('storage/VITRINE/images/shop-btn.png') }}" alt="#"></a>
		</div>
                    </li>
                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('storage/VITRINE/images/slider2.png') }}" style='background-color:#b2c4cc' alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption light_heavy_70_shadowed_ed lfr randomrotateout tp-resizeme rs-parallaxlevel-10"
			data-x="560"
			data-y="100"
			data-speed="1000"
			data-start="2900"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-end="9000"
            data-endspeed="1000"
			style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Girls latest trend
		</div>
                   <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0" data-x="560" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div style="text-align:left;">That this group would somehow form a family that's the way we all became the<br/> Brady Bunch. Love exciting and new. Come aboard were expecting you. Love life's<br/> sweetest reward Let it flow it floats back to you! </div>
                        </div>
                   <div class="tp-caption green_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10"
			data-x="560"
			data-y="290"
			data-speed="1000"
			data-start="3900"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-end="10200"
            data-endspeed="1000"
			style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#"><img src="{{ asset('storage/VITRINE/images/shop-btn.png') }}" alt="#"></a>
		</div>
                    </li>
                    <li data-transition="zoomin" data-slotamount="7" data-masterspeed="600">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('storage/VITRINE/images/slider3.png') }}" alt="videobg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption light_heavy_70_shadowed lfr randomrotateout tp-resizeme rs-parallaxlevel-10"
			data-x="300"
			data-y="200"
			data-speed="1000"
			data-start="2900"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-end="9000"
            data-endspeed="1000"
			style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Top fashion for men
		</div>
                   <div class="tp-caption grey_regular_81 customin tp-resizeme rs-parallaxlevel-0" data-x="470" data-y="300" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div style="text-align:left;">trendy summer collections 2015</div>
                        </div>
                   <div class="tp-caption green_bold_bg_20 shop_class skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10"
			data-x="500"
			data-y="350"
			data-speed="1000"
			data-start="3900"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-end="10200"
            data-endspeed="1000"
			style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap;"><button type="button" class="btn btn-default">Shop now</button>
		</div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </div>
    <!-- MAIN-SLIDER-AREA END -->

    <!-- MAIN-FEATURED-AREA -->
        @include('layouts.partials.vitrine.body')
    <!-- LATEST-BLOG-AREA END -->

    <!-- Entire FOOTER START -->
	<footer class="entire_footer">
		@include('layouts.partials.vitrine.footer')
	</footer>
	<!-- Entire FOOTER END -->


    <!-- jQuery latest -->
	<script type="text/javascript" src="{{ asset('storage/VITRINE/js/jQuery.2.1.4.js') }}"></script>

	<!-- js Modernizr -->
	<script src="{{ asset('storage/VITRINE/js/modernizr-2.6.2.min.js') }}"></script>

	<!-- js Modernizr -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="{{ asset('storage/VITRINE/js/jquery.counterup.min.js') }}"></script>

    <!-- Revolution slider -->
    <script type="text/javascript" src="{{ asset('storage/VITRINE/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/VITRINE/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

	<!-- Bootsrap js -->
    <script src="{{ asset('storage/VITRINE/js/bootstrap.min.js') }}"></script>

	<!-- Plugins js -->
    <script src="{{ asset('storage/VITRINE/js/plugins.js') }}"></script>

	<!-- Owl js -->
    <script src="{{ asset('storage/VITRINE/js/owl.carousel.min.js') }}"></script>

	<!-- Custom js -->
    <script src="{{ asset('storage/VITRINE/js/main.js') }}"></script>

</body>

</html>
