$('document').ready(function(){
	$('.delete-btn').each(function(){
		$(this).on('click', function(){
			$(this).parent().parent().remove();
		});
	});
	
});

function fnValidateQuestionUpload()
{
	
}