$('.our-range-item__btn').click(function(){
	var product = $(this).parent().find('.our-range-item__title').text();
	$('#assort__mark').attr('value',product);
})
