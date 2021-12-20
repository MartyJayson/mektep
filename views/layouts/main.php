<?php

use app\core\Application; ?>

<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<title>
	Mektep
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- Nucleo Icons -->
	<link href="assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />    
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="assets/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">

</head>
<style>
	.copyrights {
	color: white;
    border-top: 1px dashed rgba(255, 255, 255, 0.1);
    background-color: #1f1f1f;
    box-sizing: border-box;
    width: 100%;
    text-align: center;
    padding: 10px 0px;
    overflow: hidden;
}
</style>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="#4c5a7d !important">
		<div class="container">
			<a class="navbar-brand ml--9" href="/">Mektep Online Education Platform</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar-default">
				<div class="navbar-collapse-header">
					<div class="row">
						<div class="col-6 collapse-brand">
							<a href="javascript:void(0)">Mektep Menu</a>
						</div>
						<div class="col-6 collapse-close">
							<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>

				<ul class="navbar-nav ml-lg-auto">
				<?php if (Application::$app->session->isAuthenticated()) : ?>
					<li class="nav-item dropdown">
						<a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="ni ni-circle-08"></i>
							<span class="nav-link-inner--text d-lg-none">User</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
						<a class="dropdown-item" href="/dashboard">Dashboard</a>
						<a class="dropdown-item" href="/profile">Profile</a>
						<a class="dropdown-item" href="/passwordchange">Change password</a>
							<a class="dropdown-item" href="/logout">Logout</a>
						</div>
					</li>
					<?php else: ?>
					<li class="nav-item dropdown">
						<a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="ni ni-settings-gear-65"></i>
							<span class="nav-link-inner--text d-lg-none">Settings</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
							<a class="dropdown-item" href="/login">Login</a>
							<a class="dropdown-item" href="/register">Register</a>
						</div>
					</li>
					<?php endif; ?>
				</ul>

			</div>
		</div>
	</nav>
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('/assets/img/slider-01.jpg')">
				<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>MEKTEP </strong> education website</h2>
										<p class="lead">With Mektep responsive landing page template, you can promote your all hosting, domain and email services. </p>
											<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('/assets/img/slider-02.jpg')">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">MEKTEP <strong>education online school</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">With Mektep responsive landing page template, you can promote your all hosting, domain and email services. </p>
											<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('/assets/img/slider-03.jpg')">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>VPS Servers</strong> Company</h2>
										<p class="lead" data-animation="animated fadeInLeft">1 IP included with each server 
											Your Choice of any OS (CentOS, Windows, Debian, Fedora)
											FREE Reboots</p>
											<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>2021 BEST MEKTEP education school</h4>
                        <h2>Welcome to MEKTEP education school</h2>
                        <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="assets/img/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="assets/img/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft">
					<img src="assets\img\student.png" alt="student" style="width: 50%">
					</span>
					
					<p class="stat_count">12000</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft">
					<img src="assets\img\school.png" alt="school" style="width: 60%">
					</span>
					<p class="stat_count">24</p>
					<h3>Schools</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft">
					<img src="assets\img\teacher.png" alt="teacher" style="width: 70%">
					</span>
					<p class="stat_count">200</p>
					<h3>Teachers</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Choose Your Plan</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs"style="background-color: orange">
                            <li><a class="active" href="#tab1" data-toggle="pill" style="background-color: black; color: white">Monthly Subscription</a></li>
                            <li><a href="#tab2" data-toggle="pill" style="background-color: black; color: white">Yearly Subscription</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1" style="background-color:black">
                                            <h2>$45</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>50GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>50</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>20</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1" style="background-color:black">
                                            <h2>$59</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1" style="background-color:black">
                                            <h2>$85</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1" style="background-color:black">
                                            <h2>$477</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1" style="background-color:black">
                                            <h2>$485</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1" style="background-color:black">
                                            <h2>$500</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="https://yt3.ggpht.com/ytc/AKedOLQCQ7CzGB7hstOaDCwiSRQjN05mY_f0D-Q8yy-s=s900-c-k-c0x00ffffff-no-rj" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Logotip_ministry_of_education_of_the_Kazakhstan.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="https://nurbank.kz/up_img/2018/agyl.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="data:image/jpeg;base64,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" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEXyWCT////yVBv/+ff/+/r85eD2noTxSwDyUxH3pIzyViDzZTX6ybn71cfyXizyVR797ur1hmT96uP+9PD83tT70ML3o4f1g1/0dk7zZjf3nYDzbUD2lXb1fln5u6n4r5j5tKD82s/2lnj84tn3rJf7y7z0eFH4qZD2j23zaz36v6z0cUg8INmMAAAGRUlEQVR4nO3d65aiOhAGUAzoYKmAoOKtBbS98v7vd3DsmTOtSRpiSEhWff+7zV4EUEilnJ7tcXQPoPWg0Pyg0Pyg0Pyg0Pyg0Pyg0Pyg0Pyg8CtuEvU7lThyPXnCaLYbTK+O/6s78YNy+3mMXSnCfjYtAxKC06kAEBid9uOfjT8IvWId+J3jfQVCQk67+C1hnJekm7o/CZ3pnH8cucJ5Wv2HjgfC6zASFCZ50PED+AiQj0JImJxHnT+AXwk/5gLCZOGYcAAfgQ2byBImZ4OAjkPKSVNhPjIJWB3FdNZMOAlMOQf/BC5JE2GcEt0jbhogOf2LKlXo5UadhI+ES/o8pQqL0rQ5eg8MqfOUKlwbN0fvgSv1ekoTxoZdR/8EFnWFua97rGKBEe13BkWYTI2cpFXIrZ7wYOR15h6ypvyQoghvgZmn4f0bOGWavgq9oamT1IGyqCNMLuYKR+M6wqg0dZJWyesIY2NPw+pS8/n63ZQiNHaSVsJhHWHf0Pv9PWTwertAoVlBIQrVBSAQ+jtThACj7ULoN6oZQiDkckyOK1uFQFaXeXXbHlt6DCEcbee/nyfZKQTiTI9fz8tsFFbH73L8+7XSPiGQyvfPm07bhOBDevz2JtcuYTU/188v420SVvNzO355Hm+PsLp+pnPK+wZrhGGwn1Dfp9giJMsd472mJUKSFqzld5YIL+ylPlYISXpgAq0QhpuCDbRDSHk+bZWQnLjLJi0QOhkPaIGQ+iLMKiHh3CnsEIYZf2Wv+UKgLSqwSQgOZ82rHcKAuR4UhbygEIUSg0IUMoJCFEoMClHICApRKDEoRCEjKEShxKAQhYygEIUSg0IUMoJCFEoMClHICApRKDEoRCEjKEShxKDQPOHzcG0TAhmtp99GbJcwhM26cL/vCWOTMCSre1mMu7BUeJ+fk/unWioMyWY9eVTFWCkEf7X9W5ZmoTAMR4vi/8+zTgikHEz+rdqyTAh+sC++l91ZJYRwtZ49f5JFQiDXwfy1qtAeIXG2E1olRVPhraNCcNIJvSq0qTAT2gW3dSEEC1ZBWlPhVmh3yraF4NP3uRUQJiehXeNaFoIzYA+5oXAOQhv/tSwMp5yayWbCZCE2iHaF1I0nBYWim1G3K/TPvHq7RsJE7DrTshAC1sb2zYU70c2oWxWSKbc7URPh5Cq6kXGbQgi4xecNhN58Kby/aKvCFb9ksr7wthTfIbZNYbjkbAHRQNgfvtP7pVVhyu+7VE/YzzZv9ZZqVTjlV5/XEfazjze7L3VbGOclvNscrMNCr/KF7292311h9Pb87LTQO2SlpOZ1nRS6h7zyyeA53RTG2Uli46XOCd1DtvFlNlfUKUxehd4sO4HcZiFahYNnYZSfpHdX1CrcPgkvS19+iwKdwmj6fLzaaGajU1go6QuiU7hT0hdEo9DdK+mwpFE4E3700ij6hO5a0UZ+2oRzoV3ym0eb8JAq6nOmSxhfVDVy0ySM1VxH79Ei9I4f6lrxaRBWv49U9r5WL4xzOc9f6kax0JudS19ts0ilQu9wf/4pm/BDVAqr+amh8bUyoTcbbnyiocmgIqE3y2U/f6kbNcI4Wzoyn581iQKhdzhfiY75+Uj7wln2IbbUR1LaFsZZqfT+/ppW3+Onk2wj7f2DaFpdbTIqtc7PR1pe9SV3sELpUHVeS0EhCrsfFD4S6x7mG6nXlzu6duG6LxagtHahCBU+G5McCHZ1hO7a2PbxcKUsAX0V9nLdAxUOdQkoRajqNYr8kAulooUijI09EQmthxRF6A4MvSOCQ1uWSxH25oZeasIPWsUHTeilRhIhoHZYogl7NyULJ2SHUXdFFUaiVTk6A6MxtaaFKuwVG/OIZE8vfqQL3cy4M5HZEpMu7EVTw85EWLEauTGEvVlqFBECZi8+lrA3Ea+vUh8gA+ZCCaawIhpzFCFgAznCXnHpwDPeOglXOWe5EkfY6+/BgJkKZHPj1efyhD33pnYphUB+bzPCM/CF1WH87MLrCGaABNMxc5eDWsKeW5w3hEgq2pEZgJCQIB3zyx5rCKtE42FargIgXYoTbE6XvOCdgPWF1c+paHbcZedhd/KZ3yb9H6ZnE+GXs0upP+wGQkODQvODQvODQvODQvODQvODQvODQvODQvPzH1vou7QCIuLHAAAAAElFTkSuQmCC" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="data:image/jpeg;base64,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" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
 <!-- Footer -->
 <footer class="copyrights">
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">MEKTEP</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
    </footer>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <script src="assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>