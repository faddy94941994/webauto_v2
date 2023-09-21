jQuery(document).ready(function($) {
$('.spinner-show-message').hide();	
	$('.wheel-with-image').superWheel({
		slices: [{
			text: Image1,
			message: '',
			value: 1,
			background: "#40030A",
		}, {
			text: Image7,
			value: 2,
			message: '',
			background: "#1B0303",
		}, {
			text: Image2,
			value: 3,
			message: '',
			background: "#40030A",
		}, {
			text: Image3,
			value: 4,
			message: '',
			background: "#1B0303",
		}, {
			text: Image4,
			value: 5,
			message: '',
			background: "#40030A",
		}, {
			text: Image8,
			value: 6,
			message: '',
			background: "#1B0303",
		}, {
			text: Image5,
			value: 7,
			message: '',
			background: "#40030A",
		}, {
			text: Image6,
			value: 8,
			message: '',
			background: "#1B0303",
		}],
		text: {
			type: 'image',
			color: '#CFD8DC',
			size: 15,
			offset: 5,
			orientation: 'h',
		},
		line: {
			width: 0.8,
			color: "#CDA33A"
		},
		center: {
			width: "30",
			rotate: false,
			image: {
				url: ImageCenter,
			}
		},
		outer: {
			width: 2,
			color: "#CDA33A",
			background: "#1B0303"
		},
		inner: {
			width: 5,
			color: "#CDA33A"
		},
		marker: {
			background: "#00BCD4",
			animate: 1
		},
		selector: "value",
		easing: "superWheel",
		width: 500,
	});
	var tick = new Audio('spinner/media/tick.mp3');
	
	$(document).on('click', '.-promotion-return-by-user', function(e) {
		

		window.dispatchEvent(new Event('resize'));

	});

	$(document).on('click', '.wheel-with-image-spin-button', function(e) {
		
			$.ajax({
				url: "spinner/Check.php",
				type: "POST",
				success:function(data){
					var decrypted = CryptoJSAesJson.decrypt(data, LICENSE);
					var obj = JSON.parse(decrypted);
					$('#spincredit').html(obj.Credit);
					updatepoint = obj.Point;
					if (obj.statu == "success"){
						$('.spinner-show-message').hide();
						$('.spinner-start').show();
						$('.spinner-show-message').html(obj.message);
						$('.wheel-with-image').superWheel('start', 'value', obj.response);
					}else if (obj.statu == "No_Credit"){
						$('.spinner-show-message').addClass('text-danger');
						$('.spinner-show-message').html(obj.message);
						$(".spinner-show-message").show();
						$('.spinner-start').hide();
					}else{
						$('.spinner-show-message').addClass('text-danger');
						$('.spinner-show-message').html(obj.message);
						$(".spinner-show-message").show();
						$('.spinner-start').hide();
					}
					
				}
			});
		$(this).prop('disabled', true);
	});
	$('.wheel-with-image').superWheel('onStart', function(results) {
		$('.wheel-with-image-spin-button').text('กรุณารอสักครู่');
		$('.sWheel-wrapper').addClass('effect-color');
		$('.spinner-show-message').hide();
		$('.spinner-start').show();
		$('.spinner-start').html('<i class="far fa-clock"></i> ระบบกำลังสุ่มรางวัล.....');
	    $('.spinner-show-message').removeClass('text-success').removeClass('text-danger').removeClass('text-info');
	});
	$('.wheel-with-image').superWheel('onStep', function(results) {
		if (typeof tick.currentTime !== 'undefined')
			tick.currentTime = 0;
		tick.play();
	});
	$('.wheel-with-image').superWheel('onComplete', function(results) {
		$(".spinner-start").hide();
		$(".spinner-show-message").show();
		
		if (results.value === 1) {
			
			 $('.spinner-show-message').addClass('text-success');
			
		} else if (results.value === 2) {
			
			$('.spinner-show-message').addClass('text-danger');

		} else if (results.value === 3) {

			$('.spinner-show-message').addClass('text-success');

		} else if (results.value === 4) {

			$('.spinner-show-message').addClass('text-success');

		} else if (results.value === 5) {

			$('.spinner-show-message').addClass('text-success');

		} else if (results.value === 6) {

			$('.spinner-show-message').addClass('text-danger');

		} else if (results.value === 7) {

			$('.spinner-show-message').addClass('text-success');
			

		} else if (results.value === 8) {

			$('.spinner-show-message').addClass('text-success');

		}
		$('#spinpoint').html(updatepoint);
		$('.sWheel-wrapper').removeClass('effect-color');
		$('.wheel-with-image-spin-button:disabled').prop('disabled', false).text('หมุนวงล้อ ');
	});
});