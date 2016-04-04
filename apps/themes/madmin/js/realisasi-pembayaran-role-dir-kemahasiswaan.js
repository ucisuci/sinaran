
$("input[type='text'][name^='BesaranRealisasiKomponenPeriode']").keyup(function(){

    var index = $("input[type='text'][name^='BesaranRealisasiKomponenPeriode']").index($(this));
    var rencana = $("#RencanaPembayaranUiKeMhs").html().split('.').join("");
    var thisval =  $(this).val().split('.').join("");
    var sisa = rencana - thisval;
    var nilaiKomponenBeasiswa =  $("#nilaiKomponenBeasiswa").val();
    
    //nilaiKomponenBeasiswa
    
    if(nilaiKomponenBeasiswa == thisval ){
      $("input[type='text'][id='RealisasiPembayaranUiKeMhsBesaranKomponenCol"+ (index + 1 ) + "Id']").val($(this).val());
      $("input[type='text'][id='RealisasiPembayaranUiKeMhsSisaBesaranKomponenCol"+ (index + 1 ) + "Id']").val(0);
    }else{
      $("input[type='text'][id='RealisasiPembayaranUiKeMhsBesaranKomponenCol"+ (index + 1 ) + "Id']").val($(this).val());
      $("input[type='text'][id='RealisasiPembayaranUiKeMhsSisaBesaranKomponenCol"+ (index + 1 ) + "Id']").autoNumeric('init',{aSep: '.', aDec: ',', mDec: 0, vMax:sisa});
      $("input[type='text'][id='RealisasiPembayaranUiKeMhsSisaBesaranKomponenCol"+ (index + 1 ) + "Id']").autoNumeric('set',sisa);
    }


});
$("input[type='text'][name^='RealisasiPembayaranUiKeMhs[besaran_komponen][]']").keyup(function(){

    var index = $("input[type='text'][name^='RealisasiPembayaranUiKeMhs[besaran_komponen][]']").index($(this));
    var rencana = $("#RencanaPembayaranUiKeMhs").html().split('.').join("");
    var thisval =  $(this).val().split('.').join("");
    var sisa = rencana - thisval;
    var nilaiKomponenBeasiswa =  $("#nilaiKomponenBeasiswa").val();


    if(nilaiKomponenBeasiswa == thisval){
       $("input[type='text'][name^='RealisasiPembayaranUiKeMhs[sisa_besaran_komponen]["+index+"]']").val(0);
      }else{
      $("input[type='text'][name^='RealisasiPembayaranUiKeMhs[sisa_besaran_komponen]["+index+"]']").autoNumeric('init',{aSep: '.', aDec: ',', mDec: 0, vMax:sisa});
      $("input[type='text'][name^='RealisasiPembayaranUiKeMhs[sisa_besaran_komponen]["+index+"]']").autoNumeric('set',sisa);
    }
   
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