<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// var_dump ($GLOBALS);


?>
<hr>


<style type="text/css">
	.weather-inputs {
		margin-top:20px;
	}
	#city {
		margin-right: 15px;
	}
	.weather-inputs input {
    width: 200px;
    height: 40px;
    border-radius: 5px;
		height: 40px;
		padding-left: 20px;
  }
  #search {
    width: 200px;
    height: 40px;
    margin: 0px 0px 0px 25px;
    padding-top: 0;
  }
  #weather-section {
    color: black;
		display: inline-block;
  }
	.error-msg {
		display: none;
		color: red;
		padding-left: 130px;
	}
	#map {
  height: 316px;  /* The height is 400 pixels */
  width: 400px;  /* The width is the width of the web page */
	display: none;
	margin: 20px 0 0 50px;
	border: 1px solid black;
 }
 h5 {
	 display: inline-block;
	 margin-right: 8px;
 }
  @media only screen and (max-width: 400px){
    .weather-inputs input {
      display: block;
      margin: 10px auto;
    }
    #search{
      display: block;
      margin: 10px auto;
    }
  }
  /**{
    outline: 1px solid black;
  }*/
</style>

	<form id = 'weather'>
	  <div class="media">
					  	<div class="media-left">
					    	<a data-toggle = "modal" title = "Preview the site" href = "#led">
					      		<img class = "media-object img-circle media-pics" src = "/assets/images/sunset.jpg" height = "100" width = "100" alt = "">
					    	</a>
						</div><!-- media-left-->
						<div class="media-body">
						    <h1 class = "portfolio-section">Current Conditions</h1>
						    <p class = "summary">Enter a city or zip code.</p>
						</div><!-- media-body-->
		</div><!-- media-->
		<div class="weather-inputs">
	   	<input type = 'text' id = 'city'>
			<input type = 'text' id = 'zip'>
	   	<input id = 'search' class = 'btn btnfos btnfos-5' type = 'submit' value = 'Search Weather'>
		</div>
		<div class="error-msg">
			<p>Please enter one or the other.</p>
		</div>
	</form>
	<div class = "initial" id = "weather-section"></div>
	<div id="map">

	</div>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm_SrqQpoTFb0Mk1O4RoCl1OusuuwLNO4&callback=initMap"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#weather').submit(function(e) {

				let city = document.querySelector('#city').value ? 'q=' + document.querySelector('#city').value : null;
				let zip = document.querySelector('#zip').value ? 'zip=' + document.querySelector('#zip').value : null;

				if((city && zip) || (!city && !zip)) {
					e.preventDefault();
					$('#city').attr('class', 'alert alert-warning');
					$('#zip').attr('class', 'alert alert-warning');
					$('#search').attr('disabled', true);
					$('.error-msg').css('display', 'block');
					$('#map').css('display', 'none');
					$('#weather-section').css('display', 'none');
					setTimeout(function(){
						$('#city').attr('class', '');
						$('#zip').attr('class', '');
						$('#search').attr('disabled', false);
						$('.error-msg').css('display', 'none');
					}, 3000);
				}

				if((city && !zip) || (!city && zip)) {
					$('#search').attr('disabled', false);
					$('.error-msg').attr('style', 'display: none');

					let endpoint = `https://api.openweathermap.org/data/2.5/weather?`;
					let key = `&APPID=d31101f7ad4ff57f93e691c0052b78f4&units=imperial`;
					let query = city ? city : zip;
					endpoint += query;
					endpoint += key;

					$.get(endpoint, function(res) {
							let cityName = res.name;
							let lat = res.coord.lat;
							let lon = res.coord.lon;
							let current_temp = res.main.temp;
							let min_temp = res.main.temp_min;
							let max_temp = res.main.temp_max;
							let weatherMain = res.weather[0].main;
							let description = res.weather[0].description;
							let pressure = res.main.pressure;
							let icon = res.weather[0].icon;
							let deg = '&deg;';

							let weather = '<div><h5>Current temperature:</h5>' + current_temp + deg  + '</div><div><h5>Min temperature:</h5>' + min_temp + deg + '</div><div><h5>Max temperature:</h5>' + max_temp + deg + '</div><div><h5>Weather:</h5>' + weatherMain + '</div><div><h5>Description:</h5>' + description + '</div><div><h5>Atmospheric Pressure:</h5>' + pressure + ' hPa</div>';
							$('#weather-section').html('<h3>'+ cityName +'</h3><img src="https://openweathermap.org/img/w/' + icon + '.png" alt="weather' + cityName + '/" width="50" height="50">' + weather);
							$('#weather-section').css('display', 'inline-block');
							initMap(lat, lon);
							$('#map').attr('style', 'display: inline-block');
					}, 'json');
				}

				function initMap(lat, lon) {
				  var location = {lat: lat, lng: lon};
				  var map = new google.maps.Map(
				      document.getElementById('map'), {zoom: 4, center: location});
				  var marker = new google.maps.Marker({position: location, map: map});
				}

          return false;
      });
  });

</script>
