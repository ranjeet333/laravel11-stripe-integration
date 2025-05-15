import axios from 'axios';
window.axios = axios;
import jQuery from 'jquery';
window.$ = jQuery;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

var donation = 25;
var processingFee = 0.00
var tip = 12;
var tip_amount = 0;
var total = 0;

$(document).ready(function() 
{

	$('#menu').on('click', function()
	{
		$('#mobile-menu').removeClass('hidden')
	});

	$('#close-menu').on('click', function(){
		$('#mobile-menu').addClass('hidden');
	});

	$('#openModal').on('click', function () {
    $('#modalOverlay').removeClass('hidden');
    $('#donationModal').removeClass('-translate-x-full');
  });

  $('#closeModal, #modalOverlay').on('click', function () {
    $('#modalOverlay').addClass('hidden');
    $('#donationModal').addClass('-translate-x-full');
  });

  $('#amount-other').on('click', function () {
    $("input[type='radio'][name='amount']").prop('checked',false)
  });

  $('#add-msg').on('click', function () 
  {
  	$(this).addClass('hidden');
    $("#msg").removeClass('hidden')
  });

  $('#next').on('click', function () 
  {
  	$('.error-msg').text('');

  	const email = $('#email').val();
   	const regex = /^[a-zA-Z0-9_.+\-]+[\x40][a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/;
    const isValid = regex.test(email);

  	if($('#email').val() == '')
  	{
  		$('.error-msg').text('Email is required');
  	} 
  	else if(!isValid)
  	{
  		$('.error-msg').text('Enter a valid email address');
  	}
  	else if($('#amount-other').val() != '' && $('#amount-other').val() == 0)
  	{
  		$('.error-msg').text('Enter amount grather than 0');
  	}
  	else
  	{
  		$('#setep-1').addClass('hidden');
  		$('#setep-2').removeClass('hidden');

  		if($('input[name="amount"]:checked').val())
  		{
  			donation = parseInt($('input[name="amount"]:checked').val())
  		}
  		else
  		{
  			donation = parseInt($('#amount-other').val());
  		}

  		$('#donation, #donation_amount').text(donation);
  		tip_amount = (donation * tip) / 100;
  		total = donation + tip_amount;
  		$('#total').text(total);

  		$('#donation_amount').val(donation);
  		$('#tip_amount').val(tip_amount);
  		$('#proccess_amount').val(0);
  	}
  });

  $('#back').on('click', function()
  {
  	$('#setep-1').removeClass('hidden');
  	$('#setep-2').addClass('hidden');
  });
});

$('#processing').on('change',function()
{
	processingFee = parseFloat($(this).val());
	var tipProcessFee = (processingFee * tip) / 100;
	tipProcessFee = parseFloat(toFixedTrunc(tipProcessFee,2));
	var processingAmount = processingFee + tipProcessFee;

	$('#fee').text(processingAmount);
	total = donation + processingAmount + tip_amount;
	$('#total').text(total);

	$('#proccess_amount').val(processingAmount);
});

$('#tip').on('change',function()
{
	tip = $(this).val();
	tip_amount = (donation * tip) / 100;

	var tipProcessFee = (processingFee * tip) / 100;
	tipProcessFee = parseFloat(toFixedTrunc(tipProcessFee,2));
	var processingAmount = processingFee + tipProcessFee;

	$('#fee').text(processingAmount);
	total = donation + processingAmount + tip_amount;
	$('#total').text(total);

	$('#proccess_amount').val(processingAmount);
	$('#tip_amount').val(tip_amount);

});

$('#finish').on('click',function()
{
	$('#donationForm').submit();
})

function toFixedTrunc(x, n) 
{
  const [intPart, decPart = ""] = x.toString().split(".");
  return n === 0 ? intPart : `${intPart}.${decPart.padEnd(n, "0").slice(0, n)}`;
}

function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}