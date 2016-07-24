			$('document').ready(function(){
				   // More Info Audio
					$(function () {
					 //Find the audio control on the page
					   var audioPlay = document.getElementById('TestAudioData');
					  // Attaches an event ended and it gets fired when current playing song get ended
					   audioPlay.addEventListener('ended', function() {
							$('.tonal-test-wrapper .tonal-test-view .option-view label').css('pointer-events','inherit');
							
							setTimeout(function(){
								if(!$("input.custom-radio-button:checked").val()) {
									
									$('.alert-danger').fadeIn().delay(4000).fadeOut(400);
									
									setTimeout(function(){
										$('.alert-warning').fadeIn().delay(4000).fadeOut(400);
								
									}, 5000);
									
									setTimeout(function(){
										$('.alert-success').fadeIn().delay(5000).fadeOut(400);
								
									}, 10000);
									
							}
							}, 3000);
							
					   });
				   });
				   
				});