
$("input[type='text'][name^='BesaranKomponenPeriode']").keyup(function(){
	
	var index = $("input[type='text'][name^='BesaranKomponenPeriode']").index($(this));
	//alert('index : '+index);
	$("input[type='text'][id='RencanaPembayaranUiKeMhsBesaranKomponenCol"+ (index + 1 ) + "Id']").val($(this).val());
});
/*
$("input[type='text'][name^='BesaranKomponenPeriode']").keypress(function(e){
	
	//this.value = this.value.replace(/[^0-9\.]/g,'');
	
	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
       // $("#errmsg").html("Digits Only").show().fadeOut("slow");
       return false;
    }
	
});

$("input[type='text'][id^='RencanaPembayaranUiKeMhsBesaranKomponenCol']").keypress(function(e){
	
	//this.value = this.value.replace(/[^0-9\.]/g,'');
	
	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
       // $("#errmsg").html("Digits Only").show().fadeOut("slow");
       return false;
    }
	
});
*/