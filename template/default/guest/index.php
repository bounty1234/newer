<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Theme Region">
		<meta name="description" content="">

		<title><?=$page_title;?> | <?=project_name;?></title>

		<!-- CSS -->
		<link rel="stylesheet" href="<?=$this_folder;?>/css/bootstrap.min.css" >
		<link rel="stylesheet" href="<?=$this_folder;?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=$this_folder;?>/css/animate.css">
		<link rel="stylesheet" href="<?=$this_folder;?>/css/cubeportfolio.min.css">
		<link rel="stylesheet" href="<?=$this_folder;?>/css/magnific-popup.css">
		<link rel="stylesheet" href="<?=$this_folder;?>/css/slick.css">
		<link rel="stylesheet" href="<?=$this_folder;?>/css/aos.css">
		<link rel="stylesheet" href="<?=$this_folder;?>/css/fonts.css">
		<link rel="stylesheet" href="<?=$this_folder;?>/css/main.css">  
		<link rel="stylesheet" href="<?=$this_folder;?>/css/responsive.css">

	    <!-- icons -->
	    <link rel="icon" href="<?=$logo;?>"> 
		<!-- icons -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 	<body>
		<div class="tr-topbar clearfix">
			<div class="container">
				<div class="topbar-left">
					
				</div>
				<ul class="tr-list pull-right">
					<li><span class="icon icon-personal"></span> <a href="<?=domain;?>/login">Login</a> / <a href="<?=domain;?>/register">Signup</a></li>
				</ul>
			</div><!-- /.container -->
		</div><!-- /.tr-topbar -->

		<div class="tr-menu">
			<div class="navbar navbar-default navbar-expand-lg">
				<div class="container">
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
	                </button>
					<a class="navbar-brand logo" href="<?=domain;?>"><img class="img-fluid" src="<?=$this_folder;?>/images/logo.png" alt="Logo"></a>
					<a class="navbar-brand logo-2" href="<?=domain;?>"><img class="img-fluid" src="<?=$this_folder;?>/images/logo2.png" alt="Logo"></a>

					<div id="mainmenu" class="collapse navbar-collapse navbar-right justify-content-end"> 
						<ul class="nav navbar-nav">
							<li class="scroll active"><a href="#home">Home</a></li>
							<li class="scroll"><a href="#service">How it Works</a></li>
							<li class="scroll"><a href="#tr-about">About us</a></li>
							<li class="scroll"><a href="#tr-faq">FAQs</a></li>
							<li class="scroll"><a href="#tr-feedback">Contact</a></li>
						</ul>
					</div>
				</div><!-- /.container -->					
			</div><!-- /.navbar -->										
		</div><!-- /.tr-menu -->
		
		<div id="home" class="tr-home-slider">	
			<div id="home-carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
				<!-- /.item -->
					<div class="item carousel-item active" style=" background-image:  url(<?=$this_folder;?>/images/bg/yatch.jpg); background-size: cover;">
						<div class="container">
							<div class="item-content">	
								<div class="tr-middle">
									<div class="slider-info">
										<h1 data-animation="animated fadeInUp" style="color: black;">You are entire </h1>
										<h2 data-animation="animated fadeInUp"  style="color: black;"><?=project_name;?></h2>
										<p  data-animation="animated fadeInUp"  style="color: black;">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor . Aenean sollicitudin, lorem quis bibendum auctor.</p>
										<div class="button" data-animation="animated fadeInUp"  style="color: black;">
											<a href="#" class="btn-primary">Get Started</a>
										</div>
									</div>
								</div>
							</div><!-- /.item-content -->
						</div>							
					</div><!-- /.item -->
				
					<style type="text/css">
						.fadeInUp{color: black;}
					</style>
				</div><!-- /.carousel-inner -->
				<div class="container indicators-content">
					<ol class="carousel-indicators">
						<li data-target="#home-carousel" data-slide-to="0" class="active">
							<div class="slide-control aos-animate" data-aos-duration="300" data-aos-delay="100" data-aos="fade-up">
								<span class="icon icon-benefits color-red"></span>
								<p>Securing the Future in a <span class="color-red">Connected World</span></p>
							</div>				
						</li>
						<li data-target="#home-carousel" data-slide-to="1">
							<div class="slide-control aos-animate" data-aos-duration="400" data-aos-delay="200" data-aos="fade-up">
								<span class="icon icon-seo color-red"></span>
								<p>Customize Everything, <span class="color-red">Including the Admin!</span></p>
							</div>					
						</li>
						<li data-target="#home-carousel" data-slide-to="2">
							<div class="slide-control aos-animate" data-aos-duration="500" data-aos-delay="300" data-aos="fade-up">
								<span class="icon icon-engineering color-red"></span>
								<p>UI Designer of the Year <span class="color-red">& Judge at CSSDA</span></p>	
							</div>				
						</li>
					</ol>					
				</div><!-- /.container -->	
			</div><!-- /#home-carousel -->				
		</div><!-- /.tr-home-slider -->

		<div id="service" class="tr-service tr-section text-center">
			<div class="container">			
				<div class="section-content">
					<div class="title-section aos-animate" data-aos-duration="400" data-aos-delay="100" data-aos="zoom-in">
						<div class="color-red">
							<h1>Services</h1>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
					</div><!-- /.title-section -->
					<span class="title-section-bg">Service</span>	
									
					<div class="row">
						<div class="col-md-4">
							<div class="service aos-animate" data-aos-duration="300" data-aos-delay="100" data-aos="fade-up">
								<div class="icon icon-position color-red"></div>
								<h2>Powerful Framework</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="service aos-animate" data-aos-duration="300" data-aos-delay="200" data-aos="fade-up">
								<div class="icon icon-tracking color-red"></div>
								<h2>Time Sensitive</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="service aos-animate" data-aos-duration="300" data-aos-delay="300" data-aos="fade-up">
								<div class="icon icon-money color-red"></div>
								<h2>Enterprise Ready</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="service aos-animate" data-aos-duration="300" data-aos-delay="100" data-aos="fade-up">
								<div class="icon icon-add color-red"></div>
								<h2>Creative Design</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="service aos-animate" data-aos-duration="300" data-aos-delay="200" data-aos="fade-up">
								<div class="icon icon-strategy color-red"></div>
								<h2>Customize Code</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="service aos-animate" data-aos-duration="300" data-aos-delay="300" data-aos="fade-up">
								<div class="icon icon-advice color-red"></div>
								<h2>Trusted Support</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							</div>	
						</div>
					</div><!-- /.row -->
					
				</div><!-- /.service-content -->
			</div><!-- /.container -->
		</div><!-- /.tr-service -->	

		<div class="tr-cta-1 bg-image">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cta-info aos-animate" data-aos-duration="400" data-aos-delay="100" data-aos="fade-right">
							<span class="icon icon-destroy color-red"></span>
							<h1>Are you ready to buy this theme</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<a href="#" class="btn-primary">Buy This Theme</a>
						</div><!-- /.cta-info -->
					</div>
					<!-- <div class="col-md-6">
						<div class="cta-image aos-animate" data-aos-duration="400" data-aos-delay="200" data-aos="fade-left">
							<img src="<?=$this_folder;?>/images/others/laptop.png" alt="Image" class="img-fluid">
						</div>
					</div> -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.tr-section -->	

	
		<div id="tr-about" class="tr-about tr-section tr-bg-white">
			<div class="container">
				<div class="section-content text-center">
					<div class="title-section aos-animate" data-aos-duration="400" data-aos-delay="400" data-aos="zoom-in">
						<div class="color-red">
							<h1>About us</h1>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
					</div><!-- /.title-section -->
					<span class="title-section-bg">About</span>

					<div class="row text-left">
						<div class="col-md-4">
							<div class="about aos-animate" data-aos-duration="400" data-aos-delay="300" data-aos="fade-up">
								<h2>Backgrounds</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="about aos-animate" data-aos-duration="500" data-aos-delay="400" data-aos="fade-up">
								<h2>Our Approach</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="about aos-animate" data-aos-duration="600" data-aos-delay="500" data-aos="fade-up">
								<h2>Methodology</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
					</div><!-- /.row -->

					<div class="tr-rating-bar">
						<div class="row">
							<div class="col-md-3">
						        <div class="skill-progress aos-animate" data-aos-duration="500" data-aos-delay="500" data-aos="fade-up">
							        <label class="pull-left text-left">HTML & CSS</label>
							        <span class="rating-count pull-right text-right">95%</span>
						            <div class="progress">
						                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-3">
						        <div class="skill-progress aos-animate" data-aos-duration="600" data-aos-delay="600" data-aos="fade-up">
							        <label class="pull-left text-left">Photoshop</label>
							        <span class="rating-count pull-right text-right">85%</span>
						            <div class="progress">
						                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-3">
						        <div class="skill-progress aos-animate" data-aos-duration="700" data-aos-delay="700" data-aos="fade-up">
							        <label class="pull-left text-left">PHP</label>
							        <span class="rating-count pull-right text-right">70%</span>
						            <div class="progress">
						                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-3">
						        <div class="skill-progress aos-animate" data-aos-duration="800" data-aos-delay="800" data-aos="fade-up">
							        <label class="pull-left text-left">Wordpress</label>
							        <span class="rating-count pull-right text-right">85%</span>
						            <div class="progress">
						                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
						                </div>
						            </div>
						        </div>
							</div>
						</div>
					</div>
				</div><!-- /.section-content -->
			</div><!-- /.container -->
		</div><!-- /.tr-about -->

		<div id="tr-faq" class="tr-faq tr-section text-center">
			<div class="container">
				<div class="section-content">
					<div class="title-section aos-animate" data-aos-duration="400" data-aos-delay="400" data-aos="zoom-in">
						<div class="color-red">
							<h1>Frequently Asked Questions</h1>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
					</div><!-- /.title-section -->
					<span class="title-section-bg">Questions</span>

					<div class="tr-faq-content text-left">
						<form action="#" class="tr-form aos-animate" data-aos-duration="400" data-aos-delay="400" data-aos="flip-left">
							<input type="search" name="search" class="form-control" placeholder="Type to find answer...">
							<button type="submit" class="color-red"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>								
						<div class="row">
							<div class="col-md-4 col-lg-3">			
								<div class="choose-topics faq-box tr-bg-white aos-animate" data-aos-duration="400" data-aos-delay="400" data-aos="fade-up">
									<span>Choose Topics</span>
									<ul class="nav nav-tabs tr-faq-tabs">
										<li class="active"><a data-toggle="tab" href="#application">Wev Application</a></li>
										<li><a data-toggle="tab" href="#update">Updates</a></li>
										<li><a data-toggle="tab" href="#payments">Payments</a></li>
										<li><a data-toggle="tab" href="#social">Social</a></li>
									</ul>							
								</div>
								<div class="find-answer faq-box tr-bg-white aos-animate" data-aos-duration="500" data-aos-delay="500" data-aos="fade-up">
									<div class="not-find">
										<span class="color-red">can’t find answer?</span>
										<p>Don’t worry, our support team will help you</p>
									</div>
									<div class="faq-contact">
										<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
										<span>Contact us</span></a>
									</div>
								</div><!-- /.faq-contact -->
							</div>
							<div class="col-md-8 col-lg-9">
								<div class="tab-content">
									<div id="application" class="tab-pane fade in active show">
										<div class="row">
											<div class="col-md-6">
												<div class="tr-question aos-animate" data-aos-duration="500" data-aos-delay="500" data-aos="fade-left">
													<div class="question-number pull-left">
														<span>1</span>
													</div>
													<div class="question-content media-body">
														<h2>Is there an age limit your product ?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question aos-animate" data-aos-duration="600" data-aos-delay="600" data-aos="fade-left">
													<div class="question-number pull-left">
														<span>2</span>
													</div>
													<div class="question-content media-body">
														<h2>Why can't I connect to your app?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question aos-animate" data-aos-duration="700" data-aos-delay="700" data-aos="fade-left">
													<div class="question-number pull-left">
														<span>3</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="tr-question aos-animate" data-aos-duration="800" data-aos-delay="800" data-aos="fade-left">
													<div class="question-number pull-left">
														<span>4</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question aos-animate" data-aos-duration="900" data-aos-delay="900" data-aos="fade-left">
													<div class="question-number pull-left">
														<span>5</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question aos-animate" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-left">
													<div class="question-number pull-left">
														<span>6</span>
													</div>
													<div class="question-content media-body">
														<h2>Is there an age limit your product ?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
											</div>			
										</div><!-- /.row -->
									</div><!-- /.tab-pane -->

									<div id="update" class="tab-pane fade">
										<div class="row">
											<div class="col-md-6">
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>1</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>2</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>3</span>
													</div>
													<div class="question-content media-body">
														<h2>Is there an age limit your product ?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
											</div>	
											<div class="col-md-6">
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>4</span>
													</div>
													<div class="question-content media-body">
														<h2>Is there an age limit your product ?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>5</span>
													</div>
													<div class="question-content media-body">
														<h2>Why can't I connect to your app?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>6</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
											</div>		
										</div><!-- /.row -->
									</div><!-- /.tab-pane -->

									<div id="payments" class="tab-pane fade">
										<div class="row">
											<div class="col-md-6">
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>1</span>
													</div>
													<div class="question-content media-body">
														<h2>Why can't I connect to your app?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>2</span>
													</div>
													<div class="question-content media-body">
														<h2>Is there an age limit your product ?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>3</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>4</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>5</span>
													</div>
													<div class="question-content media-body">
														<h2>Is there an age limit your product ?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>6</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
											</div>			
										</div><!-- /.row -->								
									</div><!-- /.tab-pane -->

									<div id="social" class="tab-pane fade">
										<div class="row">
											<div class="col-md-6">
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>1</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>2</span>
													</div>
													<div class="question-content media-body">
														<h2>Why can't I connect to your app?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>3</span>
													</div>
													<div class="question-content media-body">
														<h2>Is there an age limit your product ?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>4</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>5</span>
													</div>
													<div class="question-content media-body">
														<h2>How do I delete messages or chats?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
												<div class="tr-question">
													<div class="question-number pull-left">
														<span>6</span>
													</div>
													<div class="question-content media-body">
														<h2>Is there an age limit your product ?</h2>
														<p>Stability of isotopes is affected by the ratio of protons to neutrons, also by the presence of certain "magic numbers" of neutrons or protons that and filled quantum</p>
													</div>
												</div>
											</div>			
										</div><!-- /.row -->								
									</div><!-- /.tab-pane -->
								</div><!-- /.tab-content -->
							</div>
						</div><!-- /.row -->
					</div><!-- /.tr-faq-content -->					
				</div><!-- /.section-content -->						
			</div><!-- /.container -->
		</div><!-- /.tr-faq -->	

	
		<div class="tr-fun-facts tr-section text-center tr-bg-white">
			<div class="container">
				<div class="section-content">
					<div class="title-section aos-animate" ata-aos-duration="500" data-aos-delay="500" data-aos="zoom-in">
						<div class="color-red">
							<h1>Some Fun Facts</h1>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
					</div><!-- /.title-section -->
					<span class="title-section-bg">Fun Facts</span>

					<div class="fun-fact-content">
					    <div class="row">
					        <div class="col-md-4">
					            <div class="fun-fact-info aos-animate" ata-aos-duration="500" data-aos-delay="500" data-aos="fade-up">
					            	<span class="icon icon-seo color-red"></span>
					                <p>Clients Worked With</p>
					                <span class="counter">1245</span>
					            </div>
					        </div>
					        <div class="col-md-4">
					            <div class="fun-fact-info aos-animate" ata-aos-duration="600" data-aos-delay="600" data-aos="fade-up">
					            	<span class="icon icon-notifications color-red"></span>
					                <p>Completed Projects</p>
					                <span class="counter">986</span>
					            </div>
					        </div>
					        <div class="col-md-4">
					            <div class="fun-fact-info aos-animate" ata-aos-duration="700" data-aos-delay="700" data-aos="fade-up">
					            	<span class="icon icon-pulse color-red"></span>
					                <p>Winning Awards</p>
					                <span class="counter">23</span>
					            </div>
					        </div>
					    </div><!-- row -->
					</div>
				</div><!-- /.section-content -->			
			</div><!-- /.container -->
		</div><!-- /.tr-fun-facts -->

	
		<div class="tr-testimonial tr-section text-center tr-bg-white">
			<div class="container">
				<div class="testimonial-slider text-center">
					<div class="testimonial aos-animate" ata-aos-duration="600" data-aos-delay="600" data-aos="flip-left">
						<div class="testimonial-info">
							<span class="icon icon-quotes color-red"></span>
							<h1>Allowing for field strengths are and ceramic magnets, but these are also amongweakesttypes the ferrite magnets are mainly.</h1>
							<div class="author">
								<img src="<?=$this_folder;?>/images/others/author1.png" alt="Image" class="img-fluid img-circle">
							</div>
							<div class="testimonial-title">
								<h2 class="color-red">Jeff Sanders</h2>
								<span>Founder, Sonvaocas</span>
							</div>
						</div>
					</div><!-- /.testimonial -->
					<div class="testimonial aos-animate" ata-aos-duration="600" data-aos-delay="600" data-aos="flip-left">
						<div class="testimonial-info">
							<span class="icon icon-quotes color-red"></span>
							<h1>Allowing for field strengths are and ceramic magnets, but these are also amongweakesttypes the ferrite magnets are mainly.</h1>
							<div class="author">
								<img src="<?=$this_folder;?>/images/others/author2.png" alt="Image" class="img-fluid img-circle">
							</div>
							<div class="testimonial-title">
								<h2 class="color-red">Jeff Sanders</h2>
								<span>Founder, Sonvaocas</span>
							</div>
						</div>
					</div><!-- /.testimonial -->
					<div class="testimonial aos-animate" ata-aos-duration="600" data-aos-delay="600" data-aos="flip-left">
						<div class="testimonial-info">
							<span class="icon icon-quotes color-red"></span>
							<h1>Allowing for field strengths are and ceramic magnets, but these are also amongweakesttypes the ferrite magnets are mainly.</h1>
							<div class="author">
								<img src="<?=$this_folder;?>/images/others/author3.png" alt="Image" class="img-fluid img-circle">
							</div>
							<div class="testimonial-title">
								<h2 class="color-red">Jeff Sanders</h2>
								<span>Founder, Sonvaocas</span>
							</div>
						</div>
					</div><!-- /.testimonial -->
				</div><!-- /.testimonial-slider -->		
			</div><!-- /.container -->		
		</div><!-- /.tr-testimonial -->

	
		<div id="tr-feedback" class="tr-feedback clearfix tr-section text-center">
			<div class="container">
				<div class="section-content">
					<div class="title-section aos-animate" ata-aos-duration="500" data-aos-delay="500" data-aos="zoom-in">
						<div class="color-red">
							<h1>Send Us Your Feedback</h1>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
					</div><!-- /.title-section -->
					<span class="title-section-bg">Feedback</span>
										
					<form action="#" class="tr-form">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group aos-animate" ata-aos-duration="400" data-aos-delay="400" data-aos="fade-up">
									<input type="text" class="form-control" required="required" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group aos-animate" ata-aos-duration="500" data-aos-delay="500" data-aos="fade-up">
									<input type="email" class="form-control" required="required" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group aos-animate" ata-aos-duration="600" data-aos-delay="600" data-aos="fade-up">
									<input type="number" class="form-control" required="required" placeholder="Mobile Number">
								</div> 
							</div> 
							<div class="col-sm-12">
								<div class="form-group aos-animate" ata-aos-duration="700" data-aos-delay="700" data-aos="fade-up">
									<textarea name="message" class="form-control" required="required" rows="7" placeholder="Message"></textarea>
								</div>             
							</div>     
						</div>
						<button type="submit" class="btn-primary pull-right">Submit your feedback</button>
					</form>
				</div><!-- /.section-content -->			
			</div><!-- /.container -->			
		</div><!-- /.tr-feedback -->

		<div class="tr-footer bg-color-red text-center">
			<div class="container">
				<span>Copyright &copy;  <a href="#"><?=project_name;?></a>. All Rights Reserved.</span>
			</div><!-- /.container -->
		</div><!-- /.tr-footer -->

		<!-- JS -->
		<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?=$this_folder;?>/js/jquery.min.js"></script>
        <script src="<?=$this_folder;?>/js/popper.min.js"></script>
		<script src="<?=$this_folder;?>/js/bootstrap.min.js"></script>
		<script src="<?=$this_folder;?>/js/cubeportfolio.min.js"></script>
		<script src="<?=$this_folder;?>/js/inview.min.js"></script>
		<script src="<?=$this_folder;?>/js/easypiechart.js"></script>
		<script src="<?=$this_folder;?>/js/slick.min.js"></script>
		<script src="<?=$this_folder;?>/js/aos.js"></script>
		<script src="<?=$this_folder;?>/js/magnific-popup.min.js"></script>
		<script src="<?=$this_folder;?>/js/counterup.min.js"></script>
		<script src="<?=$this_folder;?>/js/waypoints.min.js"></script>
    	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?=$this_folder;?>/js/gmaps.min.js"></script>
		<script src="<?=$this_folder;?>/js/jquery.parallax.js"></script>
		<script src="<?=$this_folder;?>/js/theia-sticky-sidebar.js"></script>
		<script src="<?=$this_folder;?>/js/main.js"></script> 
	
	</body>

</html>	