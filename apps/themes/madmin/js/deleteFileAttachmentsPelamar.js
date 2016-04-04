$.fn.deleteFileAttachments = function(options) {
	
	// This is the easiest way to have default options.
	var settings = $.extend({
		keyField:'',
		keyDelete:'',
		keyDiv:'',
		keyJumlahFileTerunggah:'',
		keyIndex: '',
		jumlahFileTerunggah:'', 
		jumlahFileTerhapus:'',
	}, options);

	keyField = settings.keyField;
	keyDelete = settings.keyDelete;
	keyDiv = settings.keyDiv;
	keyJumlahFileTerunggah = settings.keyJumlahFileTerunggah;
	keyIndex = settings.keyIndex;
	jumlahFileTerunggah = settings.jumlahFileTerunggah;
	jumlahFileTerhapus = settings.jumlahFileTerhapus;
	
	$(this).on('click', function(e) {	
		//e.preventDefault();
		//alert('Holla');
		
		objectId = "a#" + $(this).attr("id");
		index = $(objectId).index($(this));
		hiddenField = $('input[name="'+ keyField +'"]');
		hiddenFieldValue = hiddenField.eq(index).val();
		
		//alert('Index : ' + index);
		//alert('hiddenFieldValue : '+hiddenFieldValue);
		
		fieldKeyJumlahFileTerunggah = $('input[name="'+ keyJumlahFileTerunggah +'"]');
		fieldKeyJumlahFileTerunggahValue = fieldKeyJumlahFileTerunggah.eq(index).val();
		
		//alert('fieldKeyJumlahFileTerunggahValue : ' + fieldKeyJumlahFileTerunggahValue);
		
		fieldKeyIndex = $('input[name="'+ keyIndex +'"]');
		fieldKeyIndexValue = fieldKeyIndex.eq(index).val();
		
		//alert('fieldKeyIndexValue : ' + fieldKeyIndexValue);
		
		
		var confirmMsg = confirm("Apakah Anda ingin menghapus dokumen ini ??? ");
		if (confirmMsg == true) {

			$(this).parent('div').remove();
			
			rowAdded = '<input type="hidden" name="' + keyDelete + '" value="' + hiddenFieldValue + '" />';
			$(keyDiv).append(rowAdded);
			
			fieldJumlahFileTerunggah = $('input[name="'+ jumlahFileTerunggah +'"]');
			fieldJumlahFileTerunggah.eq(fieldKeyIndexValue).val(fieldKeyJumlahFileTerunggahValue);
			//alert('Jumlah File Terunggah Value : ' + fieldJumlahFileTerunggahValue);
		
			fieldJumlahFileTerhapus = $('input[name="'+ jumlahFileTerhapus +'"]');
			fieldJumlahFileTerhapusValue = fieldJumlahFileTerhapus.eq(fieldKeyIndexValue).val();
		
			fieldJumlahFileTerhapusValue = parseInt(fieldJumlahFileTerhapusValue);
			jumlahFileTerhapusOnGoing = fieldJumlahFileTerhapusValue + 1;
			//alert('Jumlah File Terhapus Value : ' + fieldJumlahFileTerhapusValue);
		
			fieldJumlahFileTerhapus.eq(fieldKeyIndexValue).val(jumlahFileTerhapusOnGoing);
			
		} 
		
		
		
		return false;
	});
	
}