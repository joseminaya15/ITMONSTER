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
	autoplayTimeout : 3000
});
function sendInformation(){
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