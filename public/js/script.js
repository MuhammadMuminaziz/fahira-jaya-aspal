$('#aspal').hide();
$('#block').hide();

$('.klik').on('click', function(){
	$('.klik').removeClass('active');
	$(this).addClass('active');
});

$('#semuabtn').on('click', function(){
	$('#aspal').hide(1000);
	$('#block').hide(1000);
	$('#semua').show(1000);
});

$('#aspalbtn').on('click', function(){
	$('#aspal').show(1000);
	$('#block').hide(1000);
	$('#semua').hide(1000);
});

$('#blockbtn').on('click', function(){
	$('#aspal').hide(1000);
	$('#block').show(1000);
	$('#semua').hide(1000);
});