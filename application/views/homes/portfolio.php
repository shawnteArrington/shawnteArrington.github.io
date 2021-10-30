<!DOCTYPE html>
<html lang = "en">
	<head>
		<?php $this->load->view('partials/setup')?>
		<?php $this->load->view('partials/setup-scripts')?>
		<title>Portfolio</title>
	</head>
	<script type="text/javascript">
		$(document).ready(function() {


		});
	</script>
	<style type="text/css">
		body{
            position: relative;
        }
        ul.nav-pills{
      		top: 140px;
      		position: fixed;
		}
		  	div.col-lg-9 div{
		      	height: 250px;
		      	font-size: 28px;
		  	}

		.portfolio-section{
			font-family: 'times', sans-serif;
			color: hsl(31, 31%, 43%);
			text-shadow: 1px 1px black;
		}
		.summary{
			text-indent: 20px;
		}
		.description{
			text-align: center;
		}
		.project-sections {
			margin: 5px 0;
			padding: 20px;
			border-radius: 5px;
		}
		.initial > li {
			display: inline;
			text-decoration: none;
		}
		.initial > li > div > a > img {
			margin: 5px;
			outline: 1px solid #B18F6A;
		}
		.embed-responsive{
			outline: 1px solid #B18F6A;
		}
    .media-pics {
		padding: 3px;
		border: 1px solid #B18F6A;
		}
		.webdesign {
			background-image: url('/assets/images/NOMWBLM.png');
			background-repeat: no-repeat;
			background-position: center;
			background-size: contain;
		}
   @media only screen and (min-width: 1200px){
		  .vid-left{
		    margin-left: 100px;
		  }
	  }
    @media only screen and (max-width: 1200px){
      	#myScrollspy{
   			display: none;
   		}
  	}
	</style>
	<body data-spy = "scroll" data-target = "#myScrollspy" data-offset = "50">
		<?php $this->load->view('partials/navbar')?>
		<?php $this->load->view('partials/header')?>
		<div class = "container">
		    <div class="row">
			    <nav class = "col-lg-2" id = "myScrollspy">
			        <ul class = "nav nav-pills nav-stacked">
			         	<li><a href="#section1">Golden Ratio Calculator</a></li>
			         	<li><a href="#section2">Web Design</a></li>
			        	<li><a href="#section3">Current Conditions</a></li>
			        	<li><a href="#section4">Marketplace</a></li>
			         	<li><a href="#section5">L&eacute D Clothing</a></li>
			        </ul>
			    </nav>
		      	<div class="col-lg-10">
		        	<div class = "project-sections" id = "section1">
		          		<?php $this->load->view('portfolio/calculator')?>
		        	</div>
		        	<div class = "project-sections" id = "section2">
		          		<?php $this->load->view('portfolio/webdesign')?>
		        	</div>
		        	<div class = "project-sections" id = "section3">
		          		<?php $this->load->view('portfolio/weather')?>
		        	</div>
		        	<div class = "project-sections" id = "section4">
		        		<?php $this->load->view('portfolio/marketplace')?>
		        	</div>
		        	<div class = "project-sections" id = "section5">
						<?php $this->load->view('portfolio/ledcollection')?>
					</div>
				</div>
		    </div><!-- .row -->
		</div><!-- .container -->
		<?php $this->load->view('partials/footer')?>
	</body>
</html>
