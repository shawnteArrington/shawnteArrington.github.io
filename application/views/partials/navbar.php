<!DOCTYPE html>
<html lang="en">
	<style type="text/css">
		.navbar-brand, .btn-link-1, .btn-link-2{
			color: #B18F6A;
			font-family: 'times', sans-serif;
			font-size: ;
		}
		.navbar:hover, .btn-link-1:hover, .btn-link-2:hover, .navbar-brand:hover{
			background-color: #eee;
			color: black;
			opacity: 0.9;
		}
		.btn-link-1{
			padding: 5px 1px 5px 2.5px;
			border: none;
		}
		.btn-link-2{
			padding: 5px 10px 5px 2.5px;
			border: none;
		}
		.icon-bar{
			background-color: #B18F6A;
		}
		#toggle-menu{
			border: 2px solid black;
			border-radius: 5px;
		}
		#fb-btn, #status{
			display: inline-block;
		}
	</style>
	<body>
		<nav class = "navbar navbar-fixed-top">
			<div class = "container">
				<div class = "navbar-header">
      				<button id = "toggle-menu" type = "button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-style" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
      				</button>
     				<a class="navbar-brand font" href="/">HOME</a>
    			</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class = "collapse navbar-collapse" id = "navbar-style">
			    	<ul class = "nav navbar-nav navbar-right">
				        <li class = "dropdown btn-group navbar-btn">
				        	<a type = "button" class = "btn btn-link btn-link-1" href = "/homes/portfolio">PORTFOLIO</a>
  							<a type = "button" class = "btn btn-link btn-link-2 dropdown-toggle" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
  								<span class="caret"></span>
							    <span class="sr-only">Toggle Dropdown</span>
  							</a>
				        	<ul class="dropdown-menu">
					            <li class = "dropdown-header">Web Projects</li>
                                                    <li><a href="/homes/portfolio#section1">Golden Ratio Calculator</a></li>
                                <li><a href="/homes/portfolio#section2">Web Design</a></li>
					            <li><a href="/homes/portfolio#section3">Current Conditions</a></li>
					            <li><a href="/homes/portfolio#section4">Little Black Dress</a></li>
					            <li role="separator" class="divider"></li>
					            <li class = "dropdown-header">Miscellaneous Projects</li>
					            <li><a href="/homes/portfolio#section5" >L&eacute D Clothing, Inc.</a></li>
				         	</ul>
				        </li>
				        <li class="dropdown btn-group navbar-btn">
				        	<a type = "button" class = "btn btn-link btn-link-1" href = "/homes/about">ABOUT</a>
  							<a type = "button" class = "btn btn-link btn-link-2 dropdown-toggle" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
							    <span class="caret"></span>
							    <span class="sr-only">Toggle Dropdown</span>
  							</a>
				          <ul class="dropdown-menu">
				          	<li><a href="/homes/about#brand-section">Brand</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="/homes/about#values-section">Values</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="/homes/about#inspiration-section">Inspiration</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="/homes/about#influence-section">Influences</a></li>
				          </ul>
				        </li>
				        <li class="dropdown btn-group navbar-btn">
			        		<a type = "button" class = "btn btn-link btn-link-1" href = "/homes/connect">CONNECT</a>
  							<a type = "button" class = "btn btn-link btn-link-2 dropdown-toggle" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
  								<span class="caret"></span>
							    <span class="sr-only">Toggle Dropdown</span>
  							</a>
				         	<ul class="dropdown-menu">
				            	<li><a href="/homes/connect#experience-section">The Experience</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="/homes/connect#conversation-section">The Conversation</a></li>
				          	</ul>
				        </li>
				        <li class = "dropdown btn-group navbar-btn">
				        	<a type = "button" class = "btn btn-link btn-link-2" href = "/homes/blog">BLOG</a>
				        </li>
						    	</div>
						  	</div>
						<!-- </div> --><!-- modal -->
			      	</ul>
    			</div><!-- /.navbar-collapse -->
  			</div><!-- /.container-fluid -->
		</nav>
	</body>
</html>
