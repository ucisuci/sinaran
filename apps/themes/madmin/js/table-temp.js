/*
$(document).ready(function() {
	alert('Test');
});
*/
$(document).on( "click", "a#simpan", function(e) {
	//alert( "Hai" );
	e.preventDefault();
	
	$(".form-group:eq(4)").removeClass( "state-error" );
	$(".form-group:eq(4) .col-md-9").html('');
	
	var rowCount = $('.table > tbody > tr').length;
	var no = rowCount + 1;
	var syaratKetentuanBeasiswaTluSyaratBeasiswaId = $('#syaratKetentuanBeasiswa_ketentuan_cbo').val();
	var syaratKetentuanBeasiswaTluSyaratBeasiswaDeskripsi = $('#syaratKetentuanBeasiswa_ketentuan_cbo option:selected').text();
	var syaratKetentuanBeasiswaDeskripsi = $('#syaratKetentuanBeasiswa_deskripsi_txt').val();
	var syaratKetentuanBeasiswaRequired = $('#syaratKetentuanBeasiswa_is_required_chk').is(':checked');
	var syaratKetentuanBeasiswaRequiredTxt = "Tidak";
	if (syaratKetentuanBeasiswaRequired==true) {
		syaratKetentuanBeasiswaRequiredTxt = "Ya"
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
			//alert('sama');
			idSama = true
			return false;
		}
	});
	
	//alert(arrInputIdTlu);
	
	var arrInputDeskripsi = [];
	$('input[name="SyaratKetentuanBeasiswa[deskripsi][]"]').each(function(){
		arrInputDeskripsi.push($(this).val());
		//alert($(this).val());
		if ($(this).val()==syaratKetentuanBeasiswaDeskripsi) {
			//alert('sama');
			deskripsiSama = true
			return false;
		}
	});
	
	//$.inArray();
	
	//alert(arrInputDeskripsi);
	
	
	if (!idSama || !deskripsiSama) {
		var rowAdded = '';
			rowAdded += '<tr>';
			rowAdded += '<td>';
			rowAdded += no;
			rowAdded += '</td>';
			rowAdded += '<td>';
			rowAdded += syaratKetentuanBeasiswaTluSyaratBeasiswaDeskripsi;
			rowAdded += '<input type="hidden" name="SyaratKetentuanBeasiswa[tlu_syarat_beasiswa_id][]" id="syaratKetentuanBeasiswa_tlu_syarat_beasiswa_id" value="' + syaratKetentuanBeasiswaTluSyaratBeasiswaId + '" />';
			rowAdded += '<input type="hidden" name="SyaratKetentuanBeasiswa[deskripsi][]" id="syaratKetentuanBeasiswa_deskripsi" value="' + syaratKetentuanBeasiswaDeskripsi + '" />';
			rowAdded += '</td>';
			rowAdded += '<td>';
			rowAdded += syaratKetentuanBeasiswaDeskripsi;
			rowAdded += '</td>';
			rowAdded += '<td>';
			rowAdded += syaratKetentuanBeasiswaRequiredTxt;
			rowAdded += '<input type="hidden" name="SyaratKetentuanBeasiswa[is_required][]" id="syaratKetentuanBeasiswa_is_required" value="' + syaratKetentuanBeasiswaRequired + '" />';
			rowAdded += '</td>';
			rowAdded += '<td align="center">';
			rowAdded += '<a class="btn btn-red" id="hapus" href="#">Hapus</a>';
			rowAdded += '</td>';
			rowAdded += '</tr>';
		
		$('.table > tbody:last').append(rowAdded);
	}else{
		//form-group
		$(".form-group:eq(4)").addClass( "state-error" );
		$(".form-group:eq(4) .col-md-9").html('<em class="invalid" for="text">Entri data duplikat</em>');
		
	}
	
});

$(document).on( "click", "a#hapus", function(e) {
	//alert( "Hai" );
	e.preventDefault();	
	//alert("Index : " + $('a#hapus').index($(this)));
	var td = $(this).parent();
    var tr = td.parent();
	tr.remove();
});


