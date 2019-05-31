$('.content-five-profile-stats-vote').click(function(){
	$('.overlay').fadeIn();
	$('.popup').fadeIn();
});
$('.popup-close').click(function(){
	$('.popup').fadeOut();
	$('.overlay').fadeOut();
});


function SweetAlert(){
	return swal("Упс", "Введите, пожалуйста, данные!", "error");
};