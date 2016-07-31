function fnSaveUserAnswer(questionid, selectedoption)
{
	$.ajax({
		'type'		: 'POST',
		'url'		: strBaseURL+'tonaltest/saveuseranswer', 
		'ajax' 		: true,
		'data' 		: { questionid : questionid, selectedoption : selectedoption },
		'success' 	: function(){},
		'failure' 	: function(){}
	});
}

$('document').ready(function(){
   // More Info Audio
   setTimeout(function(){
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
					}else
					{
						fnSaveUserAnswer($("input.custom-radio-button:checked").attr("data-role-id"), $("input.custom-radio-button:checked").attr("data-role-option"));
						
						setTimeout(function(){
							//$('.alert-success').fadeIn().delay(5000).fadeOut(400);

							if((parseInt($("#hdnQuestionNo").val())+1) == arrQuestions.length)
							{
								$('.NextButtonWrapper').show();
							}

							var intNextQuestion = parseInt($("#hdnQuestionNo").val())+1;

							if(arrQuestions.length > intNextQuestion)
							{
								$("#hdnQuestionNo").val(intNextQuestion);

								$("#TestAudioData").attr('src', strBaseURL+arrQuestions[intNextQuestion].audiopath);

								$("input.custom-radio-button").attr("checked",false);

								for(var intCtr = 1; intCtr<= arrQuestions[intNextQuestion].optionscount; intCtr++)
								{
									$("#id_"+intCtr).attr('data-role-id', arrQuestions[intNextQuestion].id);

									$strOldClass = $("#id_"+intCtr).attr('class');

									$("#id_"+intCtr).removeClass($strOldClass);

									$("#id_"+intCtr).addClass('radiobtn-custom-'+arrQuestions[intNextQuestion].optioncolor);

									$strLblClass = $("#lbl_"+intCtr).attr("class");

									$("#lbl_"+intCtr).removeClass($strLblClass);

									$("#lbl_"+intCtr).addClass('btn-'+arrQuestions[intNextQuestion].optioncolor);

								}
								
								$('.tonal-test-wrapper .tonal-test-view .option-view label').css('pointer-events','none');

								audioPlay1 = document.getElementById('TestAudioData');

								audioPlay1.play();

								$("#h1QuestionCode").html(arrQuestions[intNextQuestion].questioncode);
							}
					
						}, 10000);
					}
				}, 3000);
				
		   });
	   });
   },6000);
});