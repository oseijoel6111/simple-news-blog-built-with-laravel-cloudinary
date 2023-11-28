<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/favicon.png" rel="icon">
	<!--Title-->
	<title>Zegen - Church HTML5 Template</title>
	<!-- CSS -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/font-awesome.min.css') }}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/simple-line-icons.min.css') }}">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/themify-icons.css') }}">
	<!-- Owl Slider -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.theme.default.min.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.css') }}">
	<!-- Revolution Slider -->
	<link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/main-slider/rs6.css') }}">
	<!-- Main Style -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/color-schemes/red.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}" class="main-style">
	<style>
		#rev_slider_6_1_wrapper .tp-loader.spinner1 {
			background-color: #FFFFFF !important;
		}
	</style>
	<style>
		.rs-layer.Concept-Content a,
		.rs-layer.Concept-Content a:visited {
			color: #fff !important;
			border-bottom: 1px solid #fff !important;
			font-weight: 700 !important
		}

		.rs-layer.Concept-Content a:hover {
			border-bottom: 1px solid transparent !important
		}

		.rs-layer.Concept-Content-Dark a,
		.rs-layer.Concept-Content-Dark a:visited {
			color: #000 !important;
			border-bottom: 1px solid #000 !important;
			font-weight: 700 !important
		}

		.rs-layer.Concept-Content-Dark a:hover {
			border-bottom: 1px solid transparent !important
		}

		@media only screen and (max-width:575px) {
			rs-layer.res-slide-btn {
				padding: 7px 16px !important;
				font-size: 13px !important
			}
		}

		#rev_slider_1_1_wrapper .zeus.tparrows {
			cursor: pointer;
			min-width: 60px;
			min-height: 60px;
			position: absolute;
			display: block;
			z-index: 1000;
			border-radius: 50%;
			overflow: hidden;
			background: rgba(0, 0, 0, 0.38)
		}

		#rev_slider_1_1_wrapper .zeus.tparrows:before {
			font-family: 'revicons';
			font-size: 17px;
			color: #ffffff;
			display: block;
			line-height: 60px;
			text-align: center;
			z-index: 2;
			position: relative
		}

		#rev_slider_1_1_wrapper .zeus.tparrows.tp-leftarrow:before {
			content: '\e824'
		}

		#rev_slider_1_1_wrapper .zeus.tparrows.tp-rightarrow:before {
			content: '\e825'
		}

		#rev_slider_1_1_wrapper .zeus .tp-title-wrap {
			background: rgba(0, 0, 0, 0.5);
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
			position: absolute;
			opacity: 0;
			transform: scale(0);
			-webkit-transform: scale(0);
			transition: all 0.3s;
			-webkit-transition: all 0.3s;
			-moz-transition: all 0.3s;
			border-radius: 50%
		}

		#rev_slider_1_1_wrapper .zeus .tp-arr-imgholder {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0px;
			left: 0px;
			background-position: center center;
			background-size: cover;
			border-radius: 50%;
			transform: translatex(-100%);
			-webkit-transform: translatex(-100%);
			transition: all 0.3s;
			-webkit-transition: all 0.3s;
			-moz-transition: all 0.3s
		}

		#rev_slider_1_1_wrapper .zeus.tp-rightarrow .tp-arr-imgholder {
			transform: translatex(100%);
			-webkit-transform: translatex(100%)
		}

		#rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-arr-imgholder {
			transform: translatex(0);
			-webkit-transform: translatex(0);
			opacity: 1
		}

		#rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-title-wrap {
			transform: scale(1);
			-webkit-transform: scale(1);
			opacity: 1
		}

		#rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows {
			min-width: 60px !important;
			min-height: 60px !important;
			background: rgba(0, 0, 0, 0.38) !important
		}

		#rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows:before {
			line-height: 60px !important;
			font-size: 17px !important
		}

		#rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows {
			min-width: 60px !important;
			min-height: 60px !important;
			background: rgba(0, 0, 0, 0.38) !important
		}

		#rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows:before {
			line-height: 60px !important;
			color: #ffffff !important;
			font-size: 17px !important
		}

		#rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows {
			min-width: 60px !important;
			min-height: 60px !important;
			background: rgba(0, 0, 0, 0.38) !important
		}

		#rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows:before {
			line-height: 60px !important;
			font-size: 17px !important
		}
	</style>
</head>
<!--Body Start-->

<body data-res-from="1025">
	<!--Page Loader-->
	<div class="page-loader"></div>
	<!--Zmm Wrapper-->
	<div class="zmm-wrapper">
		<a href="#" class="zmm-close close"></a>
		<div class="zmm-inner bg-white typo-dark">
			<div class="text-center mobile-logo-part margin-bottom-30">
				<a href="index.html" class="img-before"><img src="images/logo-dark.png" class="img-fluid" width="170"
						height="51" alt="Logo"></a>
			</div>
			<div class="zmm-main-nav">
			</div>
			<div class="search-form-wrapper margin-top-30">
				<form class="search-form" role="search">
					<div class="input-group add-on">
						<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default search-btn" type="submit"><i
									class="ti-arrow-right"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Overlay Search -->
	<div class="overlay-search text-center hide">
		<a href="#" class="close close-light overlay-search-close"></a>
		<div class="search-form-wrapper">
			<form class="navbar-form search-form sliding-search-form" role="search">
				<div class="input-group add-on">
					<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
					<div class="input-group-btn">
						<button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Main wrapper-->
	<div class="page-wrapper">
		<div class="page-wrapper-inner">
			@include('frontend.layouts.header')
			<!-- header -->
			<!-- Revolution Slider Section -->
			<p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="zegen-home-1" data-source="gallery"
				style="visibility:hidden;background:#000000;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
				<rs-module id="rev_slider_1_1" style="" data-version="6.5.31">
					<rs-slides>
						<rs-slide style="position: absolute;" data-key="rs-1" data-title="Web Show"
							data-thumb="{{ asset('rs-plugin/assets/zmain-slider-1-1536x864-100x100.jpg') }}"
							data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);"
							data-out="a:false;">
							<img src="{{ asset('rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme"
								title="zmain-slider-1.jpg" width="1536" height="864"
								class="rev-slidebg tp-rs-img rs-lazyload"
								data-lazyload="{{ asset('rs-plugin/assets/zmain-slider-1-1536x864.jpg') }}" data-parallax="5"
								data-no-retina>
							<!--
							-->
							<h1 id="slider-1-slide-1-layer-2" class="rs-layer Concept-Title" data-type="text"
								data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)"
								data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,-26px,-10px,-33px;"
								data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,30;l:52,55,50,40;ls:3px;fw:700;a:center;"
								data-dim="w:754px,699px,auto,400px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;"
								data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;"
								data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;"
								data-frame_999_reverse="x:true;"
								style="z-index:10;font-family:'Poppins';text-transform:uppercase;">God gives us power
							</h1><!--

							--><rs-layer id="slider-1-slide-1-layer-4" class="Concept-SubTitle" data-type="text"
								data-color="#bf0a30||#e9204f||#e9204f||#e9204f" data-rsp_ch="on"
								data-xy="x:c;y:m;yo:-42px,-83px,-64px,-71px;"
								data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,left,left,left;"
								data-dim="w:408px,auto,auto,auto;" data-padding="b:10;" data-frame_0="o:1;"
								data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;"
								data-frame_1="st:640;sp:1200;sR:640;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;"
								data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;"
								data-frame_999_reverse="x:true;"
								style="z-index:11;font-family:'Open Sans';text-transform:uppercase;">we help you get
								things done
							</rs-layer><!--

							--><rs-layer id="slider-1-slide-1-layer-14" data-type="text" data-rsp_ch="on"
								data-xy="x:c;y:m,t,t,t;yo:78px,286px,271px,233px;"
								data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;"
								data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;"
								data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;"
								data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4960;"
								style="z-index:9;font-family:'Open Sans';">Jesus is holy, loving, and worthy of all our
								worship and devotion. You will feel heaven in our Zegen Church. Join us and Praise the
								Lord Jesus.

							</rs-layer><!--

							--><rs-layer id="slider-1-slide-1-layer-16" class="res-slide-btn pop rev-btn" data-type="button"
								data-color="rgba(255,255,255,1)" data-xy="x:c;y:m;yo:162px,130px,128px,117px;"
								data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off"
								data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;"
								data-border="bor:3px,3px,3px,3px;" data-frame_0="rX:-70deg;oZ:-50;"
								data-frame_1="oZ:-50;e:power4.inOut;st:3160;sp:1750;" data-frame_999="o:0;st:w;sR:4640;"
								data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;"
								style="z-index:8;background-color:#bf0a30;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Contact
								Us
							</rs-layer><!--

							--><rs-layer id="slider-1-slide-1-layer-21" data-type="image" data-rsp_ch="on"
								data-xy="x:c;yo:228px,95px,91px,90px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
								data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;"
								data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"><img
									src="{{ asset('rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme"
									class="tp-rs-img rs-lazyload" width="80" height="80"
									data-lazyload="rs-plugin/assets/dove.png" data-no-retina>
							</rs-layer><!--
                                -->
						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-2" data-title="Web Show"
							data-thumb="{{ asset('rs-plugin/assets/zmain-slider-3-1536x864-100x100.jpg') }}"
							data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);"
							data-out="a:false;">
							<img src="{{ asset('rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme"
								title="{{ asset('zmain-slider-3.jpg') }}" width="1536" height="864"
								class="rev-slidebg tp-rs-img rs-lazyload"
								data-lazyload="rs-plugin/assets/zmain-slider-3-1536x864.jpg" data-parallax="5"
								data-no-retina>
							<!--
							-->
							<h1 id="slider-1-slide-2-layer-2" class="rs-layer Concept-Title" data-type="text"
								data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)"
								data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,0,-10px,-32px;"
								data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,28;l:52,55,50,30;ls:3px;fw:700;a:center;"
								data-dim="w:922px,845px,736px,478px;h:62px,auto,auto,35px;" data-padding="b:10;"
								data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;"
								data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;"
								data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;"
								data-frame_999_reverse="x:true;"
								style="z-index:10;font-family:'Poppins';text-transform:uppercase;">We call, price the
								lord
							</h1><!--

							--><rs-layer id="slider-1-slide-2-layer-4" class="Concept-SubTitle" data-type="text"
								data-color="#bf0a30||#e9204f||#e9204f||#e9204f" data-rsp_ch="on"
								data-xy="x:c;y:m;yo:-42px,-47px,-55px,-72px;"
								data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,center,left,left;"
								data-dim="w:446px,424px,auto,auto;" data-padding="b:10;" data-frame_0="o:1;"
								data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;"
								data-frame_1="st:640;sp:1200;sR:640;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;"
								data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;"
								data-frame_999_reverse="x:true;"
								style="z-index:11;font-family:'Open Sans';text-transform:uppercase;">WE'RE BUILDING THEM
								A HOME
							</rs-layer><!--

							--><rs-layer id="slider-1-slide-2-layer-14" data-type="text" data-rsp_ch="on"
								data-xy="x:c;y:m,t,t,t;yo:78px,312px,271px,234px;"
								data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;"
								data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;"
								data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;"
								data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4960;"
								style="z-index:9;font-family:'Open Sans';">Jesus is holy, loving, and worthy of all our
								worship and devotion. You will feel heaven in our Zegen Church. Join us and Praise the
								Lord Jesus.

							</rs-layer><!--

							--><a id="slider-1-slide-2-layer-16" class="rs-layer res-slide-btn pop rev-btn" href="sermons.html"
								target="_self" data-type="button" data-color="rgba(255,255,255,1)"
								data-xy="x:c;y:m;yo:177px,156px,128px,118px;"
								data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off"
								data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;"
								data-border="bor:3px,3px,3px,3px;" data-frame_0="y:100%;"
								data-frame_1="e:power4.inOut;st:3160;sp:1200;sR:3160;"
								data-frame_999="o:0;st:w;sR:4640;"
								data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;"
								style="z-index:8;background-color:#bf0a30;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">View
								Sermons
							</a><!--

							--><rs-layer id="slider-1-slide-2-layer-21" data-type="image" data-rsp_ch="on"
								data-xy="x:c;yo:228px,133px,102px,89px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
								data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;"
								data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"><img
									src="{{ asset('rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme"
									class="tp-rs-img rs-lazyload" width="80" height="80"
									data-lazyload="rs-plugin/assets/loveus.png" data-no-retina>
							</rs-layer><!--
-->
						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-3" data-title="Web Show"
							data-thumb="{{ asset('rs-plugin/assets/zmain-slider-2-1536x864-100x100.jpg') }}"
							data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);"
							data-out="a:false;">
							<img src="{{ asset('rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme"
								title="{{ asset('zmain-slider-2.jpg') }}" width="1536" height="864"
								class="rev-slidebg tp-rs-img rs-lazyload"
								data-lazyload="rs-plugin/assets/zmain-slider-2-1536x864.jpg" data-parallax="5"
								data-no-retina>
							<!--
							-->
							<h1 id="slider-1-slide-3-layer-2" class="rs-layer Concept-Title" data-type="text"
								data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)"
								data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,0,-10px,-38px;"
								data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,28;l:52,55,50,30;ls:3px;fw:700;a:center;"
								data-dim="w:922px,845px,736px,478px;h:62px,auto,auto,35px;" data-padding="b:10;"
								data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;"
								data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;"
								data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;"
								data-frame_999_reverse="x:true;"
								style="z-index:10;font-family:'Poppins';text-transform:uppercase;">LET'S BRING THEM HOME
							</h1><!--

							--><rs-layer id="slider-1-slide-3-layer-4" class="Concept-SubTitle" data-type="text"
								data-color="#bf0a30||#e9204f||#e9204f||#e9204f" data-rsp_ch="on"
								data-xy="x:c;y:m;yo:-42px,-47px,-55px,-76px;"
								data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,center,left,left;"
								data-dim="w:446px,424px,auto,auto;" data-padding="b:10;" data-frame_0="o:1;"
								data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;"
								data-frame_1="st:640;sp:1200;sR:640;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;"
								data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;"
								data-frame_999_reverse="x:true;"
								style="z-index:11;font-family:'Open Sans';text-transform:uppercase;">YOU CAN HELP FOR
								THEM
							</rs-layer><!--

							--><rs-layer id="slider-1-slide-3-layer-14" data-type="text" data-rsp_ch="on"
								data-xy="x:c;y:m,t,t,t;yo:78px,312px,271px,228px;"
								data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;"
								data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;"
								data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;"
								data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4960;"
								style="z-index:9;font-family:'Open Sans';">Zegen Church WordPress Theme comes with
								sermons, ministries, events, testimonies, staff members, church locations shortcodes to
								enhance your website.
							</rs-layer><!--

							--><a id="slider-1-slide-3-layer-16" class="rs-layer res-slide-btn pop rev-btn" href="ministries-grid-2.html"
								target="_self" data-type="button" data-color="rgba(255,255,255,1)"
								data-xy="x:c;y:m;yo:162px,156px,128px,112px;"
								data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off"
								data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;"
								data-border="bor:3px,3px,3px,3px;" data-frame_0="y:100%;"
								data-frame_1="e:power4.inOut;st:3160;sp:1200;sR:3160;"
								data-frame_999="o:0;st:w;sR:4640;"
								data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;"
								style="z-index:8;background-color:#bf0a30;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">View
								Ministries
							</a><!--

							--><rs-layer id="slider-1-slide-3-layer-21" data-type="image" data-rsp_ch="on"
								data-xy="x:c;yo:228px,133px,102px,85px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
								data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;"
								data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"><img
									src="{{ asset('rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme"
									class="tp-rs-img rs-lazyload" width="80" height="80"
									data-lazyload="rs-plugin/assets/bible.png" data-no-retina>
							</rs-layer><!--
-->
						</rs-slide>
					</rs-slides>
					<rs-static-layers><!--
					--></rs-static-layers>
				</rs-module>
				<script>
                    
				</script>
				<script>
					if (typeof revslider_showDoubleJqueryError === "undefined") { function revslider_showDoubleJqueryError(sliderID) { console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion."); console.log("To fix this, you can:"); console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"); console.log("2. Find the double jQuery.js inclusion and remove it"); return "Double Included jQuery Library"; } }
				</script>
			</rs-module-wrap>
			<!-- Revolution Slider Section End -->
			<!-- Page Content -->
			@yield('content')


		</div>
		<!-- .page-wrapper-inner -->
	</div>
	<!--page-wrapper-->

	<!-- Footer -->
	@include('frontend.layouts.footer')
	<!-- Footer -->
	<!-- jQuery Lib -->
	<script src="{{ asset('frontend_assets/js/jquery.min.js') }}"></script>
	<!-- Bootstrap Js -->
	<script src="{{ asset('frontend_assets/js/bootstrap.bundle.min.js') }}"></script>
	<!-- Easing Js -->
	<script src="{{ asset('frontend_assets/js/jquery.easing.min.js') }}"></script>
	<!-- Carousel Js Code -->
	<script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
	<!-- Paroller Js -->
	<script src="{{ asset('frontend_assets/js/jquery.paroller.min.js') }}"></script>
	<!-- Isotope Js -->
	<script src="{{ asset('frontend_assets/js/isotope.pkgd.min.js') }}"></script>
	<!-- Magnific Popup Js -->
	<script src="{{ asset('frontend_assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Validator Js -->
	<script src="{{ asset('frontend_assets/js/validator.min.js') }}"></script>
	<!-- Smart Resize Js -->
	<script src="{{ asset('frontend_assets/js/smartresize.min.js') }}"></script>
	<!-- Appear Js -->
	<script src="{{ asset('frontend_assets/js/jquery.appear.min.js') }}"></script>
	<!-- Theme Custom Js -->
	<script src="{{ asset('frontend_assets/js/custom.js') }}"></script>
	<!-- REVOLUTION JS FILES -->
	<script src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="{{ asset('rs-plugin/js/main-slider/rbtools.min.js') }}"></script>
	<script src="{{ asset('rs-plugin/js/main-slider/rs6.min.js') }}"></script>
	<script src="{{ asset('rs-plugin/js/main-slider/home-1.js') }}"></script>
</body>
<!-- Body End -->

</html>