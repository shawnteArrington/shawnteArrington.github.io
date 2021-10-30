<?php
    $title = "Golden Ratio Calculator";
    $summary = "Enter a number then toggle back and forth with the '<' and '>' buttons.";
?>
<script type="text/javascript">
    $(document).ready(function(){

	        $(document.body).on('click', '#left', function(){

	            var userInput = document.calculator.screen.value;
	            var answers = [];
	            var final = [];
	            for(var i = 0; i < 5; i++){
	            	answers.push((userInput/1.618).toFixed(1));
	            	userInput = answers[i];
	            	final.push('<p style="margin: 20px auto;">' + userInput + '</p>');
	            }
	            $('#screen').html(final);
	            $('#screen').css('display', 'block');
	            $('[name="screen"]').css('display', 'none');

	        });

	        $(document.body).on('click', '#right', function(){

	            var userInput = document.calculator.screen.value;
	            var answers = [];
	            var final = [];
	            for(var i = 0; i < 5; i++){
	            	answers.push((userInput*1.618).toFixed(1));
	            	userInput = answers[i];
	            	final.push('<p style="margin: 20px auto;">' + userInput + '</p>');
	            }
	            $('#screen').html(final);
	            $('#screen').css('display', 'block');
	            $('[name="screen"]').css('display', 'none');

	        });

	        $(document.body).on('click', '#reset-calc', function(){
                    $('#screen').css('display', 'none');
        	    $('[name="screen"]').css('display', 'initial');
                    document.calculator.screen.value = "";
        	});
	    });
</script>

<style type = 'text/css'>
    #reset-calc, .portfolio-section{
		display: inline-block;
	}
    #reset-calc{
		margin-left: 50px;
		height: 40px;
		width: 100px;
		padding-top: 0;
	}
    #calc-body{
        height: 526px;
        width: 325px;
        border: 1px solid #9896A4;
        border-radius: 10px;
        margin: 0 auto 0 auto;
        background-image: url('/assets/images/flowers.jpg');
        background-repeat: no-repeat;
        background-position: left;
        opacity: 0.85;

    }
    input[name = "screen"], #screen{
        height: 201px;
        width: 221px;
        border: 1px solid #9896A4;
        border-radius: 10px;
        margin: 40px 0px 0px 36px;
        background-color: #F1F1F3;
        opacity: 0.95;
        box-shadow: inset 0 4px #9896A4;

        /*Typography*/

        font-size: 20px;
        line-height: 20px;
        color: #0B0B0D;
        text-align: center;
    }
    .calc-button {
        width: 50px;
        height: 50px;
        background: #64705a;
        border-radius: 50px;
        box-shadow: 0 4px #0B0B0D;
        margin: 15px 0px 0px 15px;
        color: #F1F1F3;
        opacity: 0.9;
      /*  #96734e*/
      /*#0B0B0D a4ada4*/
    }
    .left-calc-buttons{
        margin-left: 69px;
    }
    .btn:focus,.btn:active:focus,.btn.active:focus,
    .btn.focus,.btn:active.focus,.btn.active.focus {
     outline: none;
    }

    @media only screen and (max-width: 400px){
        #calc-body{
            margin: auto;
        }
        #media-left{
            padding-bottom: 0 !important;
            height: 100px;
        }
        .summary{
            text-align: left;
            text-indent: 0;
        }
        #reset-calc{
            margin: 10px auto;
        }
    }

/**{
    border: 1px solid black;
}*/
</style>
<div class="media">
  	<div id = "media-left" class="media-left">
    	<img class = "media-object img-circle media-pics" src = "/assets/images/flowers.jpg" height = "100" width = "100" alt = "">
	</div><!-- media-left-->
	<div class="media-body">
	    <h1 class = "portfolio-section"><?= $title ?></h1><input id = 'reset-calc' type = 'reset' class = 'btn btnfos btnfos-5'>
	    <p class = "summary"><?=$summary?></p>
	</div><!-- media-body-->
</div><!-- media-->

<div class = 'container' id = 'calc-body'>
    <form name = "calculator">
        <input name = "screen" readonly>
        <div id = "screen" style="display: none;"></div>
        <div class = 'row'>
            <input type = 'button' class = 'calc-button btn btnfos-5 left-calc-buttons' value = '1' onClick = "document.calculator.screen.value += '1'">
            <input type = 'button' class = 'calc-button btn btnfos-5' value = '2' onClick = "document.calculator.screen.value += '2'">
            <input type = 'button' class = 'calc-button btn btnfos-5' value = '3' onClick = "document.calculator.screen.value += '3'">
        </div>
        <div class = 'row'>
            <input type = 'button' class = 'calc-button left-calc-buttons btn btnfos-5' value = '4' onClick = "document.calculator.screen.value += '4'">
            <input type = 'button' class = 'calc-button btn btnfos-5' value = '5' onClick = "document.calculator.screen.value += '5'">
            <input type = 'button' class = 'calc-button btn btnfos-5' value = '6' onClick = "document.calculator.screen.value += '6'">
        </div>
        <div class = 'row'>
            <input type = 'button' class = 'calc-button left-calc-buttons btn btnfos-5' value = '7' onClick = "document.calculator.screen.value += '7'">
            <input type = 'button' class = 'calc-button btn btnfos-5' value = '8' onClick = "document.calculator.screen.value += '8'">
            <input type = 'button' class = 'calc-button btn btnfos-5' value = '9' onClick = "document.calculator.screen.value += '9'">
        </div>
        <div class = 'row'>
            <input id = 'left' type = 'button' class = 'calc-button left-calc-buttons btn btnfos-5' value = '<' >
            <input type = 'button' class = 'calc-button btn btnfos-5' value = '0' onClick = "document.calculator.screen.value += '0'">
            <input id = 'right' type = 'button' class = 'calc-button btn btnfos-5' value = '>'>
        </div>
    </form>
</div>
