var maps;

maps = function(){
	
	var point = new google.maps.LatLng(-23.675392, -46.689838);
	
	var myMapOptions = {
		zoom: 15,
		center: point,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	var map = new google.maps.Map(document.getElementById('map'),myMapOptions);
	
	var image = new google.maps.MarkerImage(
		'images/image.png',
		new google.maps.Size(34,41),
		new google.maps.Point(0,0),
		new google.maps.Point(17,41)
	);
	
	var shadow = new google.maps.MarkerImage(
		'images/shadow.png',
		new google.maps.Size(58,41),
		new google.maps.Point(0,0),
		new google.maps.Point(17,41)
	);
	
	var shape = {
		coord: [19,1,21,2,23,3,24,4,25,5,26,6,27,7,27,8,28,9,28,10,29,11,29,12,29,13,29,14,29,15,29,16,29,17,28,18,28,19,28,20,27,21,26,22,32,23,33,24,33,25,33,26,33,27,33,28,33,29,33,30,33,31,33,32,33,33,30,34,26,35,25,36,23,37,21,38,19,39,17,40,16,40,16,39,14,38,14,37,14,36,14,35,13,34,13,33,12,32,12,31,12,30,12,29,11,28,11,27,11,26,10,25,8,24,7,23,7,22,6,21,5,20,4,19,4,18,3,17,3,16,3,15,3,14,3,13,3,12,3,11,3,10,3,9,4,8,4,7,5,6,5,5,6,4,7,3,9,2,11,1,19,1],
		type: 'poly'
	};
	
	var marker = new google.maps.Marker({
		draggable: false,
		raiseOnDrag: false,
		//icon: image,
		//shadow: shadow,
		//shape: shape,
		map: map,
		position: point
	});

};

function dominio_base()
{
    url_site     =  document.location.href
    url_pos      =  url_site.indexOf('//');
    url_limpar   =  url_site.substr(url_pos + 2);
    url_prot     =  url_site.substr(0, url_pos + 2);
    url_split 	 =  url_limpar.split('/');  

	//url_base 	 =  url_prot + url_split[0] + '/' + url_split[1] + '/' + url_split[2];

	url_base 	 =  url_prot + url_split[0] + '/' + url_split[1] + '/' + url_split[2] + '/';
	
	return url_base.replace('undefined\/', '');		
}

$(document).ready(maps);

$(document).ready(function(){
	
	$('#nav').localScroll(1000);
	
	// .parallax(xPosition, speedFactor, outerHeight) options:
	// xPosition - Horizontal position of the element
	// inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	// outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	
	$('#intro').parallax("50%", 0.9);
	
	$('#second').parallax("10%", 0.9);
	
	$('.bg_second').parallax("50%", 0.3);
	
	$('#third').parallax("50%", 0.3);
	
	$('#fifth').parallax("50%", 0.3);
	
	$('#sixty').parallax("50%", 0.3);

    $('#accordion').accordion();

	$('.phone_with_ddd').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) 
		{
			element.mask("(99) 99999-999?9");
		} 
		else 
		{
			element.mask("(99) 9999-9999?9");
		}
	}).trigger('focusout');

	/*
	 *  Formulario de Falecom
	 */
	$("#FormX").bind("submit", function(){
		
		var params  =  $("#FormX").serialize();
		var ctoken  =  $("input[name=ci_csrf_token]").val();
		
		// Se rolou sucesso no cadastro
		$.ajax({
			type	 :  "POST",
			cache	 :  false,
			url		 :  dominio_base() + "home/enviar",
			data	 :  params,
			error    :  function(data) 
			{
				alert('Problemas com servidor, favor se cadastre novamente.');
			},
			success  :  function(data) 
			{
				$('#FormX').each (function(){
					this.reset();
				});
			}
		});
			
		return false;
	});
})