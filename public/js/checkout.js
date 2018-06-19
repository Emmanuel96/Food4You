
Stripe.setPublishableKey('pk_live_C7IdOgQEEDjoSWf7i9qIYCLz');

var $form = $('#payment-form');
$form.submit(function(event){
		event.preventDefault(); 

	$('#charge-error').addClass('hidden');
	$form.find('button').prop('disabled',true);
	Stripe.card.createToken({
	 	number:$('#card_number').val(),
	 	cvc:$('#cvc').val(),
	 	exp_month:$('#exp_month').val(),
	 	exp_year:$('#exp_year').val(),
	 	name:$('#card_name').val()
	},stripeResponseHandler);
	return false;
});

function stripeResponseHandler(status, response)
{
	if(response.error)
	{
		alert(response.error.message);
		$('charge-error').removeClass('hidden');
		$('charge-error').text(response.error.message);
		$form.find('button').prop('disabled',false);
	}
	else
	{
		var token = response.id; 
		$form.append($('<input type="hidden" name="stripeToken" />').val(token));

		$form.append($('<input type="hidden" name="name" />').val($('#name').val()));
		$form.append($('<input type="hidden" name="email" />').val($('#email').val()));
		$form.append($('<input type="hidden" name="phone" />').val($('#phone-number').val()));
		$form.append($('<input type="hidden" name="address" />').val($('#address').val()));

		$(document.body).append($form);
		$form.get(0).submit(); 
	}
}





