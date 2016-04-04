$(document).on( "click", "#DataPelamarUsulkanSemua", function(e) {
	var value = $(this).is(':checked');
	$('.DataPelamar_id_pelamar').prop('checked', false);
	if (value==true) {
		$('.DataPelamar_id_pelamar').prop('checked', true);
	}
});