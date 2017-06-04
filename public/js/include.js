$(document).on("click", ".hapus-transaksi", function () {
	var id_transaksi = $(this).data('id');
	$(".button-hapus").attr('href', 'delete-data/' + id_transaksi);
});
$(document).on("click", ".hapus-acara", function () {
	var id = $(this).data('id');
	$(".button-hapus-acara").attr('href', 'delete-acara/' + id);
});