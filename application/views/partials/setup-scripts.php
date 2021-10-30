<!--jquery as of 08/07/17-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/8ff2619442.js"></script>
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
		$('[data-toggle="popover"]').popover();

		$(function(){

			$(document).on( 'scroll', function(){

				if ($(window).scrollTop() > 300) {
					$('.scroll-top-wrapper').fadeIn();
				} else {
					$('.scroll-top-wrapper').fadeOut();
				}
			});

			$('.scroll-top-wrapper').on('click', scrollToTop);
		});

		function scrollToTop() {
			verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
			element = $('body');
			offset = element.offset();
			offsetTop = offset.top;
			$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');

		}
	});
</script>
