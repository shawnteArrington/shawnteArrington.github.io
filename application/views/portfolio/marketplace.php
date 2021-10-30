<hr>
<?php
    $title = "Marketplace <small>Little Black Dress</small>";
    $summary = "This season's hottest little black dresses. Narrow the selection to find the perfect fit for you.";
?>
<script>
    $(document).ready(function(){
    	//retrieve all black dresses
    	$.get('https://api.shopstyle.com/api/v2/products?pid=uid2121-33532261-55&cat=dresses&fl=c16&offset=0&limit=50&sort=Popular&', function(res){
    		var brands1 = "";
    		var brands2 = "";
    		var brandArray = [];
    		var retailers = "<h4>Retailer</h4><br>";
    		var retailerArray = [];
    		var prices = "<h4>Price</h4><br>"
    		for(var i = 0; i < res.products.length; i++){
    			if(res.products[i].brand){
    				if($.inArray(res.products[i].brand.name, brandArray) == -1){
    					brandArray.push(res.products[i].brand.name);
    					if(brandArray.length < 17){
    						brands1 += "<input type = 'checkbox' class = 'dress' name = 'brand' value = 'fl=b" + res.products[i].brand.id + "&amp'>  <label style='font-weight: normal;'>" + res.products[i].brand.name + "</label><br>";
    					}else{
    						brands2 += "<input type = 'checkbox' class = 'dress' name = 'brand' value = 'fl=b" + res.products[i].brand.id + "&amp'>  <label style='font-weight: normal;'>" + res.products[i].brand.name + "</label><br>";
    					}
    				}
    				if($.inArray(res.products[i].retailer.name, retailerArray) == -1){
    					retailerArray.push(res.products[i].retailer.name);
    					retailers += "<input type = 'checkbox' class = 'dress' name = 'retailer' value = 'fl=r" + res.products[i].retailer.id + "&amp'>  <label style='font-weight: normal;'>" + res.products[i].retailer.name + "</label><br>";
    				}
    			}
    		}
    		prices += "<input type = 'checkbox' class = 'dress' name = 'price' value = 'fl=p20:27&amp'> <label style='font-weight: normal;'> less than $200</label><br>";
    		prices += "<input type = 'checkbox' class = 'dress' name = 'price' value = 'fl=p20:31&amp'> <label style='font-weight: normal;'> &lt $400</label><br>";
    		prices += "<input type = 'checkbox' class = 'dress' name = 'price' value = 'fl=p20:33&amp'> <label style='font-weight: normal;'> &lt $600</label><br>";
    		prices += "<input type = 'checkbox' class = 'dress' name = 'price' value = 'fl=p20:35&amp'> <label style='font-weight: normal;'> &lt $800</label><br>";
    		$('#brands1').html(brands1);
    		$('#brands2').html(brands2);
    		$('#retailers').html(retailers);
    		$('#prices').html(prices);
    	}, 'json');

    	$(document.body).on('click', '.dress', function(){
    		var brand = document.querySelectorAll('[name="brand"]:checked');
    		var brands = "";
    		for(var i = 0; i < brand.length; i++){
    			brands += brand[i].value;
    		}
    		var retailer = document.querySelectorAll('[name="retailer"]:checked');
    		var retailers = "";
    		for(var i = 0; i < retailer.length; i++){
    			retailers += retailer[i].value;
    		}
    		var price = document.querySelectorAll('[name="price"]:checked');
    		var prices = "";
    		for(var i = 0; i < price.length; i++){
    			prices += price[i].value;
    		}
    		var obj = brands + prices + retailers;
    		$.get('https://api.shopstyle.com/api/v2/products?pid=uid2121-33532261-55&cat=dresses&fl=c16&' + obj + 'offset=0&limit=50&sort=Popular', function(res) {
	            	var results = " ";
	            	for(var i = 0; i < res.products.length; i++){
	            		if(res.products[i].salePriceLabel){
	            			results += "<li><div class = 'product'><a href = " + res.products[i].clickUrl + " target = _blank ><img src = " + res.products[i].image.sizes.Large.url + "></a><p class = 'productPrice'>" + res.products[i].salePriceLabel + "</p></div></li>";
	            		}else{
	            			results += "<li><div class = 'product'><a href = " + res.products[i].clickUrl + " target = _blank ><img src = " + res.products[i].image.sizes.Large.url + "></a><p class = 'productPrice'>" + res.products[i].priceLabel + "</p></div></li>";
	            		}

	            	}
         		$('#results-section').html(results);
            }, 'json');
        });

        $(document.body).on('click', '#reset-marketplace', function(){
        	var reset = "<div></div>"
        	$('#results-section').html(reset);
        });

    });
</script>
<style>

	#reset-marketplace, .portfolio-section{
		display: inline-block;
	}
	#reset-marketplace{
		margin-left: 50px;
		height: 40px;
		width: 100px;
		padding-top: 0;
	}
	.product{
		display: inline-block;
	}
	.productPrice, h4{
		text-align: center;
	}
	input[name=brand]{
    	margin-left:20px;
    }
    input[name=retailer]{
    	margin-left: 20px;
    }

</style>
<form id = "marketplace">
  <div class="media">
  	<div class="media-left">
    	<a data-toggle = "modal" title = "Preview the site" href = "#led">
      		<img class = "media-object img-circle media-pics" src = "/assets/images/black-dress-480x640.jpg" height = "100" width = "100" alt = "black dress">
    	</a>
	   </div><!-- media-left-->
	  <div class="media-body">
    <h1 class = "portfolio-section"><?= $title ?></h1>
  	<input id = 'reset-marketplace' type = 'reset' class = 'btn btnfos btnfos-5'>
  	<p class= "summary"><?= $summary ?></p>
  </div><!-- media-->
  	<div class = "row">
    	<div class = "col-lg-7" id = "brands">
    		<h4>Brand</h4><br>
    		<div class = "row">
    			<div class = "col-lg-6" id = "brands1"></div>
    			<div class = "col-lg-6" id = "brands2"></div>
    		</div>
    	</div>
    	<div class = "col-lg-3" id = "retailers"></div>
    	<div class = "col-lg-2" id = "prices"></div>
  	</div>
  </div>
</form>
<div class = "initial" id = "results-section"></div>
