$(document).ready(function() {

	/* First screen animations */
	$('h1').hide();
	$('h2').hide();
	$('header img').hide();
	$.doTimeout( 2000, function(){
		$('h1').show();
		$('h2').show();
		$('header img').show();
		$('div.claim').show();
		$('h1').addClass('animated bounceInRight');
		$('h2').addClass('animated bounceInRight');
		$('header img').addClass('animated bounceInLeft');		
	});

	/* Section why animations */
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {}
	else {
		$('div.first-half').hide();
		$('section#why').waypoint(function(event, direction) {
			if(direction === 'down') {
				$('div.first-half').show();
				$('div.first-half').addClass('animated bounceInLeft');
			}
		}, {
			offset: '50%'
		});
	}

	/* Section contact animations */
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {}
	else {
		$('#contact').waypoint(function(event, direction) {
			if(direction === 'down') {
				$('a.button').addClass('animated pulse');
			}
		});
	}

	/* Testimonial animations */
	$('#about-me div.right').hover(
	  function () {
	    $('div.testimonial').stop(true,true).animate({top: '-=90'});
	    $('div.right span').stop(true,true).animate({top: '-=90', marginBottom: '-40px'});
	    $('div.hidden').stop(true,true).show('slow');
	  },
	  function () {
	    $('div.hidden').stop(true,true).hide(1000);
	    $('div.testimonial').stop(true,true).animate({top: '+=90'});
	    $('div.right span').stop(true,true).animate({top: '+=90', marginBottom: '+40px'});
	  }
	);

	/* Social animations */
	$('ul.social li').hover(
	  function () {
	    $(this).stop(true,true).animate({top: '-=5'});
	  },
	  function () {
	  	$(this).stop(true,true).animate({top: '+=5'});
	  }
	);

});