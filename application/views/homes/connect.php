<!DOCTYPE html>
<html lang = "en">
	<head>
		<?php $this->load->view('partials/setup')?>
		<title>Connect</title>
	</head>
	<style type="text/css">
		h2{
			margin: 45px 0;
		}
		.media-heading{
			margin: 10px 0;
		}
		img{
			padding: 3px;
			border: 1px solid #B18F6A;
		}
		p{
			margin-bottom: 15px;
		}
		#introduce-yourself, #confirmation-message{
			text-align: center;
		}
		@media only screen and (max-width: 400px){
			#email-icon{
				margin: auto !important;
			}
		}
	</style>
	<body>
		<?php $this->load->view('partials/navbar')?>
		<?php $this->load->view('partials/header')?>
		<div id = "experience-section" class = "container">
			<div class = "row">
				<h2 class = "section-title">The Experience</h2>
				<div class="media">
				  	<div class="media-left">
				    	<a data-toggle = "popover" data-trigger = "hover" data-placement = "right" title = "Ryan Munsell, Administrative & Human Resources Professional at American Solar Direct" data-content = "Direct report at American Solar Direct">
				      		<img class = "media-object img-circle" src = "/assets/images/ryan_munsell.jpg" alt = "Direct report testimonial">
				    	</a>
					</div>
					<div class="media-body">
					    <h3 class="media-heading">Poised Team Player</h3>
					    <p>"Shawnte is an excellent leader and manager. By acting as a part of the team as opposed to on top of the team, she makes you want to go the extra mile. Her cool and calm demeanor makes her work excellently under pressure."</p>
					    <h4>- Ryan Munsell, Administrative & Human Resources Professional at Bright Blue Events</h4>
					</div>
				</div>
				<hr>
				<div class="media">
				  	<div class="media-left">
				    	<a data-toggle = "popover" data-trigger = "hover" data-placement = "right" title = "Eric Shure, Customer Support Operations Manager at (mt) Media Temple" data-content = "Direct report at (mt) Media Temple">
				      		<img class = "media-object img-circle" src = "/assets/images/eric_shure.jpg" alt = "Direct report testimonial">
				    	</a>
					</div>
					<div class="media-body">
					    <h3 class="media-heading">Coveted Leader</h3>
					    <p>"Shawnte was a pleasure to work for. Someone who truly cares about those around her and always willing to lend a helping hand. Knowing how to get things done never hurt either. I would definitely welcome the opportunity to work together again."</p>
					    <h4>- Eric Shure, Customer Support Operations Manager at (mt) Media Temple</h4>
					</div>
				</div>
				<hr>
				<div class="media">
				  	<div class="media-left">
				    	<a data-toggle = "popover" data-trigger = "hover" data-placement = "right" title = "Robert Gregory, Sr. Director of Hosting Support at GoDaddy" data-content = "Direct Supervisor at (mt) Media Temple">
				      		<img class = "media-object img-circle" src = "/assets/images/robert_gregory.jpg" alt = "Manager testimonial">
				    	</a>
					</div>
					<div class="media-body">
					    <h3 class="media-heading">Highly Motivated Strategist</h3>
					    <p>"Shawnte` is not only an always punctual and open minded person but also an inspiring professional. She is a self motivated, experienced, deadline oriented and highly motivated perfectionist. Great strategist, her knowledge is vast and thorough. Always ready to deal with difficult situations and solve the problems on time."</p>
					    <h4>- Robert Gregory, Sr. Director of Hosting Support at GoDaddy</h4>
					</div>
				</div>
				<hr>
				<div class="media">
				  	<div class="media-left">
				    	<a data-toggle = "popover" data-trigger = "hover" data-placement = "right" title = "William Santa, DevOps Engineer at Headspace, Inc." data-content = "Peer at (mt) Media Temple">
				      		<img class="media-object img-circle" src = "/assets/images/william_santa.jpg" alt="...">
				    	</a>
					</div>
					<div class="media-body">
					    <h3 class="media-heading">Keen Problem-solver</h3>
					    <p>"Working with Shawnte' was great. She was always able to provide a concise/well thought out solution to any questions I had."</p>
					    <h4>- William Santa, DevOps Engineer at Headspace, Inc.</h4>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<div id = "conversation-section" class = "container">
			<div class = "row">
				<h2 class = "section-title">The Conversation</h2>
				<h4 id = "introduce-yourself">Please tell me a bit about yourself and how you would like to connect.</h4>
				<div id = "contact-section" class = "container">
<?php
				if($this->session->flashdata('contact_errors'))
				{
					foreach($this->session->flashdata('contact_errors') as $error)
					{
						echo $error;
					}

				}
?>
<a href = "mailto:shawnte.arrington@gmail.com"><img id = "email-icon" class = "img-responsive img-circle" src = "/assets/icons/email.svg" style = "margin:30px auto 0 auto;" height = "100" width = "100" alt = "at symbol"></a>


    			</div> <!-- .contact-section -->
    			<div id = "confirmation" class = "collapse">
    				<h3 id = "confirmation-message">Thank you!</h3>
    			</div>
			</div> <!-- .row -->
		</div><!-- .conversation-section -->
		<?php $this->load->view('partials/footer')?>
		<?php $this->load->view('partials/setup-scripts')?>
	</body>
</html>
