var $win = $(window);
$win.scroll(function () {
	if ($win.scrollTop() > 45) {
		$("nav").addClass("navbarcolor");
	} else {
		$("nav").removeClass("navbarcolor");
	}
});
$('a.link[href^="#"]').click(function(e) {
 	var target = $(this).attr('href');
 	var strip = target.slice(1);
 	var anchor = $("section[id='" + strip + "']");
 	e.preventDefault();
 	y = (anchor.offset() || {
 		"top" : NaN
 	}).top;
 	$('html, body').animate({
 		scrollTop : (y - 40)
 	}, 'slow');
});
$('#home .owl-carousel').owlCarousel({
	lazyLoad : true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	mouseDrag: false,
	dots: false,
	autoplayTimeout : 5000
});
function sendInformation(element){
	var name 		 = $('#name').val();
	var surname 	 = $('#surname').val();
	var company 	 = $('#company').val();
	var position 	 = $('#position').val();
	var phone 		 = $('#phone').val();
	var email 		 = $('#email').val();
	var invitation   = $('#invitation').val();
	var sport        = $('#sport').val();
	var users        = $('#users').val();
	if(name == null || name == '') {
		msj('error', 'Nombre debe completarse');
		return;
	}
	if(surname == null || surname == '') {
		msj('error', 'Apellido debe completarse');
		return;
	}
	if(company == null || company == '') {
		msj('error', 'Empresa debe completarse');
		return;
	}
	if(position == null || position == '') {
		msj('error', 'Cargo debe completarse');
		return;
	}
	if(phone == null || phone == '') {
		msj('error', 'Telefono debe completarse');
		return;
	}
	if(email == null || email == '') {
		msj('error', 'Email debe completarse');
		return;
	}
	if(!validateEmail(email)){
		msj('error', 'El formato de email es incorrecto');
		return;
	}
	if(invitation == null || invitation == '') {
		msj('error', 'Invitacion debe completarse');
		return;
	}
	if(sport == null || sport == '') {
		msj('error', 'Deporte debe completarse');
		return;
	}
	if(users == null || users == '') {
		msj('error', 'Cantidad de usuarios debe completarse');
		return;
	}
	element.prop('disabled',true);
	$.ajax({
		data : {Name	          : name,
				Surname	          : surname,
				Company           : company,
				Position          : position,
				Phone	          : phone,
				Email 	          : email,
			    Invitation        : invitation,
				Sport	          : sport,
				Users   	      : users},
		url  : 'home/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				$('.js-input').find('input').val('');
				$('.js-checkbox').find('.mdl-checkbox').removeClass('is-checked');
				$('.js-checkbox').find('input').prop("checked", false);
				$('#confirmation').addClass('aparecer');
				msj('success', data.msj);
				element.prop('disabled',false);
        	}else{
        		msj('error', data.msj);
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function sendSurvey(element){
	var name_survey    = $('#name_survey').val();
	var company_survey = $('#company_survey').val();
	var question1 	   = $('input:radio[name=question1]:checked').val();
	var question2      = $('input:radio[name=question2]:checked').val();
	var question3 	   = $('input:radio[name=question3]:checked').val();
	var question4      = $('input:radio[name=question4]:checked').val();
	var question5      = $('input:radio[name=question5]:checked').val();
	var question6      = $('input:radio[name=question6]:checked').val();
	var question7      = $('input:radio[name=question7]:checked').val();
	var question8      = $('input:radio[name=question8]:checked').val();
	var question9      = $('input:radio[name=question9]:checked').val();
	var question10     = $('input:radio[name=question10]:checked').val();
	var question11     = $('input:radio[name=question11]:checked').val();
	if(name_survey == null || name_survey == '') {
		msj('error', 'Nombre debe completarse');
		return;
	}
	if(company_survey == null || company_survey == '') {
		msj('error', 'Empresa debe completarse');
		return;
	}
	if(question1 == null || question1 == '' || question1 == undefined) {
		msj('error', 'Marcar la pregunta 1');
		return;
	}
	if(question2 == null || question2 == '' || question2 == undefined) {
		msj('error', 'Marcar la pregunta 2');
		return;
	}
	if(question3 == null || question3 == '' || question3 == undefined) {
		msj('error', 'Marcar la pregunta 3');
		return;
	}
	if(question4 == null || question4 == '' || question4 == undefined) {
		msj('error', 'Marcar la pregunta 4');
		return;
	}
	if(question5 == null || question5 == '' || question5 == undefined) {
		msj('error', 'Marcar la pregunta 5');
		return;
	}
	if(question6 == null || question6 == '' || question6 == undefined) {
		msj('error', 'Marcar la pregunta 6');
		return;
	}
	if(question7 == null || question7 == '' || question7 == undefined) {
		msj('error', 'Marcar la pregunta 7');
		return;
	}
	if(question8 == null || question8 == '' || question8 == undefined) {
		msj('error', 'Marcar la pregunta 8');
		return;
	}
	if(question9 == null || question9 == '' || question9 == undefined) {
		msj('error', 'Marcar la pregunta 9');
		return;
	}
	if(question10 == null || question10 == '' || question10 == undefined) {
		msj('error', 'Marcar la pregunta 10');
		return;
	}
	if(question11 == null || question11 == '' || question11 == undefined) {
		msj('error', 'Marcar la pregunta 11');
		return;
	}
	element.prop('disabled',true);
	$.ajax({
		data : {NameSurvey	      : name_survey,
				CompanySurvey     : company_survey,
				Question1         : question1,
				Question2	      : question2,
				Question3 	      : question3,
			    Question4         : question4,
				Question5	      : question5,
				Question6	      : question6,
				Question7	      : question7,
				Question8	      : question8,
				Question9	      : question9,
				Question10	      : question10,
				Question11   	  : question11},
		url  : 'survey/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				$('.js-input').find('input').val('');
				$('.js-checkbox').find('.mdl-checkbox').removeClass('is-checked');
				$('.js-checkbox').find('input').prop("checked", false);
				// $('#confirmation').addClass('aparecer');
				msj('success', 'Encuesta enviada');
				element.prop('disabled',false);
        	}else{
        		msj('error', data.msj);
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function verificarDatos(e) {
	if(e.keyCode === 13){
		e.preventDefault();
		ingresar();
    }
}