
$('#btnSubmit').click('click', function() {

	//alert('test submit');
	
	var submitData = $('#paket-beasiswa-form').serializeArray();
	//alert(submitData);
	 //e.preventDefault(); 
     $.ajax({
        'type':'POST',
		'url': 'validate',
		'dataType': 'json',
		'data':submitData,
		'success':function(data){
			if (data.valid == 'ok') {
				//alert('Data Valid');
				$('#paket-beasiswa-form').submit();
			}else{
				//parent.$.fancybox.close();
				//alert(data.PaketBeasiswa_nama_paket_beasiswa);
				var otherGotFocus = false;
				$(".form-group").removeClass("state-error");
				$(".invalid").remove();
				$.each(data, function(key, val) {
					//$('#'+key).append('<em class="invalid" for="text">'+ val +'</em>');
					//alert(key);
					
					$('.'+key+ ' .form-group').addClass( "state-error" );
					$('.'+key+' .form-group .errDiv').append('<em class="invalid" for="text">'+ val +'</em>');
					if (!otherGotFocus) {	
						$('#'+key).focus();
						otherGotFocus = true;
					}
					
				});
			}		
		}
	}); 
	
	return false;

});

/*
$(document).ready(function() {
	alert('Test');
});
*/
$(document).on( "click", "a#simpan", function(e) {
	e.preventDefault();
	$("#syarat_ketentuan").removeClass( "state-error");
	$("#syarat_ketentuan_error").removeClass( "state-error");
	$("#syarat_ketentuan_error").hide();
	
	var rowCount = $('#table_syarat_ketentuan > tbody > tr').length;
	var no = rowCount + 1;
	var syaratKetentuanBeasiswaTluSyaratBeasiswaId = $('#SyaratKetentuanBeasiswa_ketentuan_cbo').val();
	var syaratKetentuanBeasiswaTluSyaratBeasiswaDeskripsi = $('#SyaratKetentuanBeasiswa_ketentuan_cbo option:selected').text();
	var syaratKetentuanBeasiswaDeskripsi = $('#SyaratKetentuanBeasiswa_deskripsi_txt').val();
	var syaratKetentuanBeasiswaRequired = $('#SyaratKetentuanBeasiswa_is_required_chk').is(':checked');
	var syaratKetentuanBeasiswaRequiredTxt = "Tidak";
	if (syaratKetentuanBeasiswaRequired==true) {
		syaratKetentuanBeasiswaRequiredTxt = "Ya"
	}
	var syaratKetentuanBeasiswaUpload = $('#SyaratKetentuanBeasiswa_is_upload_chk').is(':checked');
    var syaratKetentuanBeasiswaUploadTxt = "Tidak";
    if (syaratKetentuanBeasiswaUpload==true) {
        syaratKetentuanBeasiswaUploadTxt = "Ya"
    }
    var syaratKetentuanBeasiswaTextbox = $('#SyaratKetentuanBeasiswa_is_textbox_chk').is(':checked');
    var syaratKetentuanBeasiswaTextboxTxt = "Tidak";
    if (syaratKetentuanBeasiswaTextbox==true) {
        syaratKetentuanBeasiswaTextboxTxt = "Ya"
    }
	
	
	//alert(syaratKetentuanBeasiswaTluSyaratBeasiswaId);
	//alert(syaratKetentuanBeasiswaTluSyaratBeasiswaDeskripsi);
	//alert(syaratKetentuanBeasiswaDeskripsi);
	//alert(syaratKetentuanBeasiswaRequired);
	//alert(syaratKetentuanBeasiswaRequiredTxt);
	
	
	var idSama = false;
	var deskripsiSama = false;
	var arrInputIdTlu = [];
	$('input[name="SyaratKetentuanBeasiswa[tlu_syarat_beasiswa_id][]"]').each(function(){
		arrInputIdTlu.push($(this).val());
		if ($(this).val()==syaratKetentuanBeasiswaTluSyaratBeasiswaId) {
			idSama = true;
			return false;
		}
	});
	
	var arrInputDeskripsi = [];
	syaratKetentuanBeasiswaDeskripsiTemp = syaratKetentuanBeasiswaDeskripsi.toLowerCase();
	syaratKetentuanBeasiswaDeskripsiTemp = syaratKetentuanBeasiswaDeskripsiTemp.replace(/\s+/g, '');

	$('input[name="SyaratKetentuanBeasiswa[deskripsi][]"]').each(function(){
		arrInputDeskripsi.push($(this).val());
		//alert($(this).val());
		thisTemp = $(this).val().toLowerCase();
		thisTemp = thisTemp.replace(/\s+/g, '');
		if (thisTemp==syaratKetentuanBeasiswaDeskripsiTemp) {
			//alert('sama');
			deskripsiSama = true
			return false;
		}
	});
	
	if (syaratKetentuanBeasiswaTluSyaratBeasiswaId == 0) {
		$("#syarat_ketentuan").addClass( "state-error" );
		$("#syarat_ketentuan_error").addClass( "state-error" );
		$("#syarat_ketentuan_error").show();
		$("#syarat_ketentuan_error .col-md-9").html('<em class="invalid" for="text">Entri ketentuan belum dipilih</em>');
		return false;
	}
	
	if (syaratKetentuanBeasiswaDeskripsi.length == 0) {
		$("#syarat_ketentuan").addClass( "state-error" );
		$("#syarat_ketentuan_error").addClass( "state-error" );
		$("#syarat_ketentuan_error").show();
		$("#syarat_ketentuan_error .col-md-9").html('<em class="invalid" for="text">Entri deskripsi belum diisi</em>');
		return false;
	}
	
	if (!idSama || !deskripsiSama) {
		$("#syarat_ketentuan_error").hide();
		$("#div_syarat_ketentuan").show();
		var rowAdded = '';
			rowAdded += '<tr>';
			rowAdded += '<td align="center">';
			rowAdded += '-';
			rowAdded += '</td>';
			rowAdded += '<td>';
			rowAdded += syaratKetentuanBeasiswaTluSyaratBeasiswaDeskripsi;
			rowAdded += '<input type="hidden" name="SyaratKetentuanBeasiswa[tlu_syarat_beasiswa_id][]" id="SyaratKetentuanBeasiswa_tlu_syarat_beasiswa_id" value="' + syaratKetentuanBeasiswaTluSyaratBeasiswaId + '" />';
			rowAdded += '<input type="hidden" name="SyaratKetentuanBeasiswa[deskripsi][]" id="SyaratKetentuanBeasiswa_deskripsi" value="' + syaratKetentuanBeasiswaDeskripsi + '" />';
			rowAdded += '</td>';
			rowAdded += '<td>';
			rowAdded += syaratKetentuanBeasiswaDeskripsi;
			rowAdded += '</td>';
			rowAdded += '<td>';
			rowAdded += syaratKetentuanBeasiswaRequiredTxt;
			rowAdded += '<input type="hidden" name="SyaratKetentuanBeasiswa[is_required][]" id="SyaratKetentuanBeasiswa_is_required" value="' + syaratKetentuanBeasiswaRequired + '" />';
			rowAdded += '</td>';
			rowAdded += '<td>';
			rowAdded += syaratKetentuanBeasiswaUploadTxt;
			rowAdded += '<input type="hidden" name="SyaratKetentuanBeasiswa[is_upload][]" id="SyaratKetentuanBeasiswa_is_upload" value="' + syaratKetentuanBeasiswaUpload + '" />';
			rowAdded += '</td>';
            rowAdded += '<td>';
            rowAdded += syaratKetentuanBeasiswaTextboxTxt;
            rowAdded += '<input type="hidden" name="SyaratKetentuanBeasiswa[is_textbox][]" id="SyaratKetentuanBeasiswa_is_textbox" value="' + syaratKetentuanBeasiswaTextbox + '" />';
            rowAdded += '</td>';
			rowAdded += '<td align="center">';
			rowAdded += '<a class="btn btn-danger btn-xs mbs" id="hapus-syarat-ketentuan-beasiswa" href="#">';
			rowAdded += '<i class="fa fa-trash-o">&nbsp;&nbsp;</i>';
			rowAdded += 'Hapus';
			rowAdded += '</a>';
			rowAdded += '</td>';
			rowAdded += '</tr>';
		
		$('#table_syarat_ketentuan > tbody:last').append(rowAdded);
		$('#SyaratKetentuanBeasiswa_ketentuan_cbo').val('');
		$('#SyaratKetentuanBeasiswa_deskripsi_txt').val('');
		$('#SyaratKetentuanBeasiswa_is_required_chk').removeAttr('checked');
		$('#SyaratKetentuanBeasiswa_is_upload_chk').removeAttr('checked');
        $('#SyaratKetentuanBeasiswa_is_textbox_chk').removeAttr('checked');
		
	}else{
		//form-group
		//$(".form-group:eq(4)").addClass( "state-error" );
		//$(".form-group:eq(4) .col-md-9").html('<em class="invalid" for="text">Entri data duplikat</em>');
	
		$("#syarat_ketentuan").addClass( "state-error" );
		$("#syarat_ketentuan_error").addClass( "state-error" );
		$("#syarat_ketentuan_error").show();
		$("#syarat_ketentuan_error .col-md-9").html('<em class="invalid" for="text">Entri data duplikat</em>');
	
	}
	
});

$(document).on( "click", "a#hapus-syarat-ketentuan-beasiswa", function(e) {
	//alert( "Hai" );
	e.preventDefault();	
	//alert("Index : " + $('a#hapus').index($(this)));
	var td = $(this).parent();
    var tr = td.parent();
	tr.remove();
	
	var rowCount = $('#table_syarat_ketentuan > tbody > tr').length;
	if(rowCount == 0)
		$('#div_syarat_ketentuan').hide();
});



