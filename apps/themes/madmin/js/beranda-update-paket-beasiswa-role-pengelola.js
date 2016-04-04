
$(document).on("click", "a#update-paket-beasiswa-link", function(e) {
	//alert('test');
	//return true;
	//$(this).unbind(e);
	var linkValue = $('#update-paket-beasiswa-link-value').val();
	//alert(linkValue);
	window.location.href = linkValue;
});

$(document).on("click", "a#rincian-komponen-paket-beasiswa-link", function(e) {
	//alert('test');
	//return true;
	//$(this).unbind(e);
	var linkValue = $('#rincian-komponen-paket-beasiswa-link-value').val();
	//alert(linkValue);
	window.location.href = linkValue;
});

$(document).on("click", "a#laporan-paket-beasiswa-link", function(e) {
	//alert('test');
	//return true;
	//$(this).unbind(e);
	var linkValue = $('#laporan-paket-beasiswa-link-value').val();
	//alert(linkValue);
	window.location.href = linkValue;
});


$(document).on("click", "a#konfigurasi-paket-beasiswa-link", function(e) {
	//alert('test');
	//return true;
	//$(this).unbind(e);
	var linkValue = $('#konfigurasi-paket-beasiswa-link-value').val();
	//alert(linkValue);
	window.location.href = linkValue;
});