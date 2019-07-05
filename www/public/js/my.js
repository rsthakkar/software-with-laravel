$('#new_C').submit(function(){
    $(this).find(':input[type=submit]').prop('disabled', true);
});

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



$(document).ready(function () {

	var sum = 0;
	$('.qnt').each(function(){
	    sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
	});

	$('#total').html(sum);
	var bill=sum*60;
	$('#bill').html(bill);


 
});