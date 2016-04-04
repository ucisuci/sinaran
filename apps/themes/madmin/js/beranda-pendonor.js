$(document).on("click", "a#daftar-paket-beasiswa-link", function(e) {
	//alert('test');
	//return true;
	//$(this).unbind(e);
	var linkValue = $('#daftar-paket-beasiswa-link-value').val();
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