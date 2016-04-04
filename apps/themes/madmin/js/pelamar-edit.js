$(document).on("click", "a.hapus-file-attachments-pelamar", function(e) {
	//alert('Hai');
	e.preventDefault();	
	//alert("Index : " + $('a#hapus').index($(this)));
	var index = $('a.hapus-file-attachments-pelamar').index($(this));
	//alert(index);
	hiddenField1 = $('input[name="FileAttachmentsPelamarForDelete[id][]"]');
	hiddenField2 = $('input[name="FileAttachmentsPelamarForDelete[nama_file][]"]');
	hiddenField3 = $('input[name="FileAttachmentsPelamarForDelete[ekstension][]"]');
	rowAdded = '<input type="hidden" name="FileAttachmentsPelamarTerhapus[id][]" id="FileAttachmentsPelamarTerhapus_id" value="' + hiddenField1.eq(index).val() + '" />';
	rowAdded += '<input type="hidden" name="FileAttachmentsPelamarTerhapus[nama_file][]" id="FileAttachmentsPelamarTerhapus_nama_file" value="' + hiddenField2.eq(index).val() + '" />';
	rowAdded += '<input type="hidden" name="FileAttachmentsPelamarTerhapus[ekstension][]" id="FileAttachmentsPelamarTerhapus_ekstension" value="' + hiddenField3.eq(index).val() + '" />';
	var li = $('#file-attachments-pelamar-list div').eq(index).remove();
	$('#file-attachments-pelamar-list').append(rowAdded);
});