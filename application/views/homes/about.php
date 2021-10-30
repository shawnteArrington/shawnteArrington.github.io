<!DOCTYPE html>
<html lang = "en">
	<head>
		<?php $this->load->view('partials/setup')?>
		<title>About</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/carousel.css">
	</head>
	<style type="text/css">
/*		.transform{
			display: inline-block;
		}*/
	/*	*{
			border: 1px solid black;
		}*/
		#brand-section{
			/*background-color: #034F84;*/
		}
		#brand-def{
			text-align: center;
			/*font-weight: bold;*/
		}
		#values-section{
			background-color: #98DDDE;
			border: 1px solid #bbb;
			border-radius: 5px;
		}
		#influence-section{
			background-color: #eee;
			margin-top: 20px;
			border: 1px solid #bbb;
			border-radius: 5px;
		}
	</style>
	<body>
		<?php $this->load->view('partials/navbar')?>
		<?php $this->load->view('partials/header')?>
<!-- 		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <ul class="nav navbar-nav">
		    <li><a href="#brand-section">Brand</a></li>
		</nav> -->
		<div id = "brand-section" class = "container">
			<div class = "row">
				<h2 class = "section-title">Brand</h2>
				<h4 id = "brand-def">Decisive, meticulous introvert. World-class learner and avid truth-seeker. In love with all things magic.
				</h4>
			</div>
		</div>
		<hr>
		<div class = "container">
			<div class = "row">
				<div id = "values-section" class = "col-lg-4">
					<h2 class = "section-title">Values</h2>
					<h3>Leadership <small>"If there is a book that you want to read, but it hasn't been written yet, you must be the one to write it." - Toni Morrison</small></h3>
					<h3>Empowerment <small>"A candle loses nothing by lighting another candle" - James Keller</small></h3>
					<h3>Choice <small>"The self is not something ready-made, but something in continuous formation through choice of action." - John Dewey</small></h3>
					<h3>Diversity <small>"Our workforce and our entire economy are strongest when we embrace diversity to its fullest, and that means opening doors of opportunity to everyone and recognizing that the American Dream excludes no one." - Thomas Perez</small></h3>
					<h3>Visibility <small>"Visibility is a tricky thing; is someone visible when you can point her out in a crowd, or when you understand what her life feels like to her?" - Stacey D'Erasmo</small></h3>
					<h3>Inclusion <small>"An individual has not started living until he can rise above the narrow confines of his individualistic concerns to the broader concerns of all humanity." - Dr. Martin Luther King, Jr.</small></h3>
				</div>
				<div class = "col-lg-8" >
					<div id = "inspiration-section"></div>
					<h2 class = "section-title">Inspiration</h2>
					<a data-pin-do="embedBoard" href="https://www.pinterest.com/shawnteArringtn/city-life/"data-pin-scale-width="80" data-pin-scale-height="585" data-pin-board-width="800" target = "_blank">    Visit Shawnte&acute's profile on Pinterest.</a><!-- Please call pinit.js only once per page -->
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
		<div id = "influence-section" class = "container">
			<div class = "row">
				<h2 class = "section-title">Influences</h2>
				<div class = "col-lg-3">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe class = "embed-responsive-item" src="https://player.vimeo.com/video/142078454" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<p><a href="https://vimeo.com/142078454">The Language of the Ask- Kathryn Finney, digitalundivided- Women Freedom Conference- Keynote</a> from <a href="https://vimeo.com/user14222426">digitalundivided</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
				</div>
				<div class = "col-lg-3">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/MX5OZhCtovI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</object>
					</div>
					<p>LinkedIn Co-Founder Reid Hoffman talks about his new book, "The Start-Up of You" and how to become a better enterpreneur in today's world.</p>
				</div> <!-- .col-lg-4 -->
				<div class = "col-lg-3">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/c0KYU2j0TM4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<p>In a culture where being social and outgoing are prized above all else, it can be difficult, even shameful, to be an introvert. But, as Susan Cain argues in this passionate talk, introverts bring extraordinary talents and abilities to the world, and should be encouraged and celebrated.</p>
				</div>
				<div class = "col-lg-3">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe class = "embed-responsive-item" src="https://www.youtube.com/embed/hg3umXU_qWc" allowfullscreen></iframe>
					</div>
					<p>Bestselling novelist Chimamanda Ngozi Adichie asks, "What does &#39feminism&#39 mean today?" and offers an artfully nuanced explanation of why the gender divide is harmful for women and men, alike.</p>
				</div>
			</div> <!-- .row  -->
		</div><!-- .container -->
			<!-- <div>
				<a class = "transform" data-toggle = "tooltip" title = "Te&acute does being a newborn"><img class = "img-responsive img-circle" alt = "newborn pic" src = "/assets/images/me_newborn.jpg" height = "120" width = "120"></a>
				<a class = "transform" data-toggle = "tooltip" title = "Te&acute does infancy"><img class = "img-responsive img-circle" alt = "baby pic" src = "/assets/images/me_infant.jpg" height = "120" width = "120"></a>
				<a class = "transform" data-toggle = "tooltip" title = "Te&acute does Grammy."><img class = "img-responsive img-circle" alt = "baby pic with great-grandmother" src = "/assets/images/me_and_grammy.jpg" height = "150" width = "150"></a>
				<a class = "transform" data-toggle = "tooltip" title = "Te&acute does toddlerism"><img class = "img-responsive img-circle" alt = "baby pic" src = "/assets/images/me_toddler.jpg" height = "120" width = "120"></a>
				<a class = "transform" data-toggle = "tooltip" title = "Te&acute does weight-lifting."><img class = "img-responsive img-circle" alt = "baby pic lifting weights" src = "/assets/images/me_baby_body_builder.jpg" height = "150" width = "150"></a>
				<a class = "transform" data-toggle = "tooltip" title = "Te&acute does kindergarten."><img class = "img-responsive img-circle" alt = "pic with mom and grandmother" src = "/assets/images/me_three_gens.jpg" height = "150" width = "150"></a>
				<a class = "transform" data-toggle = "tooltip" title = "Te&acute does shape-shifting."><img class = "img-responsive img-circle" alt = "baby pic" src = "/assets/images/me_collage.jpg" height = "120" width = "120"></a>
				<a class = "transform" data-toggle = "tooltip" title = "Te&acute does the 90's."><img class = "img-responsive img-circle" alt = "90's pic" src = "/assets/images/me_suited.jpg" height = "150" width = "150"></a>
			</div> -->
<!-- 			<div class = "bx-wrapper" style = "max-width: 600px; margin: 0px auto;">
				<div class = "bx-viewport" style = "width: 100%; overflow: hidden; position: relative; height: 559px">
					<div class = "slider3" style = "position: relative; transition-duration: 0s; transform: translate3d(-620px, 0px, 0px);">
						<div class = "slide" style = "list-style: none; width: 600px; margin-right: 20px;">
							<p><em>"Quote"</em></p>
							<img src="/assets/images/me_suited.jpg">
							<h3></h3>
						</div>
					</div>
				</div>
			</div> <!-- .bx-wrapper -->
			<?php $this->load->view('partials/setup-scripts')?>
	</body>
</html>
