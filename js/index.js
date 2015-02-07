$(function() {
	$('#submit').button();
	$('#post').button();

	$(document).tooltip();
	$('#username').tooltip({
		hide: { effect: "fade", duration: 1000}
	});

	$('#tabs').tabs({
		hide: { effect: "explode", duration: 1000}
	});

	$('#submit').click(function() {
		var username = $.trim($('#username').val());
		var age = $.trim($('#age').val());
		if (username == '' ||age == '') {
			alert('Please input username or age.');
			return false;
		}
		$.ajax({
			type : 'POST',
			url : 'index.php',
			dataType : 'json',
			data : {
				username : username,
				age : age,
				act : 'submit'
			},
			error : function(retValue) {
				alert('something wrong');
			},
			success : function(retValue) {
				$('#p_name').append("<p>" + retValue['username'] + "</p>");
				$('#p_age').append("<p>" + retValue['age'] + "</p>");
			}
		});
	});

	/*$('#elem').toggle(1000, function() {
		$(this).toggle(1000);
	});*/
	
	/*$('#elem').fadeOut(1000, function() {
		$(this).fadeIn(1000);
	});
	$('#elem').fadeTo(1000, 0.5);*/

	/*$('#elem').slideToggle(1000, function() {
		$(this).slideDown(1000);
	});*/

	$('#elem').animate(
		{
			position: "absolute",
			width: "400px",
			height: "200px",
			top: "100px",
			left: "200px",
			border: "2px solid black",
			padding: "20px",
		}, 1500, function() {
			// $(this).fadeIn('slow');
		}
	);

});