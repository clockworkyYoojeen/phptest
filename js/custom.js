$(document).ready(function(){
	$('#calc').click(function(){
		var form_data = $('#ceil_form').serializeArray();
		//console.log(form_data);
		  $.ajax({
		  	type: "POST",
		  	url:  "http://localhost/miniphp/tiangel/tiangle.php",
		  	data: {
				material: form_data[0].value,
				levels: form_data[1].value,
				length: form_data[2].value,
				width: form_data[3].value,
				lamps: form_data[4].value

		 },
		 success: function(res){
			$('h4.modal-title').text("Стоимость потолка: " + res + "$");
			 $('#myModal').modal();
		 },
		 error: function(){
			 alert('Error!');
		 }
		  })
		return false;
	});

	$('#order').click(function(){
		var name = $('#cust_name').val();
		var phone = $('#cust_phone').val();
		
		  $.ajax({
		  	type: "POST",
		  	url:  "http://localhost/miniphp/tiangel/mail.php",
		  	data: {
				name: name,
				phone: phone

		 },
		 success: function(res){
			 if(res === 'Отправлено!')
			 $('h4.modal-title').text(res + " Наш менеджер свяжется с Вами!");
			 else{
				$('h4.modal-title').text(res + " Попробуйте ещё раз");
			 }
			 setTimeout(function(){
				$('#myModal').modal('hide');
			 },2500);
		 },
		 error: function(){
			 alert('Error!');
		 }
		  })
		return false;
	})
})