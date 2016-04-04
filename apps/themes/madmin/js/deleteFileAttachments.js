$.fn.deleteFileAttachments = function(options) {
	
	// This is the easiest way to have default options.
	var settings = $.extend({
		keyField:'',
		keyDelete:'',
		keyDiv:''
	}, options);

	keyField = settings.keyField;
	keyDelete = settings.keyDelete;
	keyDiv = settings.keyDiv;
	
	
	$(this).on('click', function(e) {	
		//e.preventDefault();
		//alert('Holla');
		objectId = "a#" + $(this).attr("id");
		index = $(objectId).index($(this));
		hiddenField = $('input[name="'+ keyField +'"]');
		hiddenFieldValue = hiddenField.eq(index).val();
		
		//alert('Index : ' + index);
		//hiddenFieldValue = hiddenField.eq(index).val();
		//alert('hiddenFieldValue : '+hiddenFieldValue);
		
		
		var confirmMsg = confirm("Apakah Anda ingin menghapus dokumen ini ??? ");
		if (confirmMsg == true) {

			$(this).parent('div').remove();
			
			rowAdded = '<input type="hidden" name="' + keyDelete + '" value="' + hiddenFieldValue + '" />';
			$(keyDiv).append(rowAdded);
			
		} 
		
		
		
		return false;
	});
	
}