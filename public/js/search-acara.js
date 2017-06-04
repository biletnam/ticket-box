$(function(){
	searchAcara();
	$('#select-acara').on('change', function(){
		searchAcara();
	});
});

function searchAcara() {
	var search = $('#select-acara').val();    
	var CSRF_TOKEN = $('#token').attr('content');
	if (search == '') {
		$('.detail-acara').html('');
	}
	$.ajax({
		url     : "/search-acara",
		type    : "POST",
		data    : {
			'search' : search,
			'_token' : CSRF_TOKEN
		},
		success: function(search){
			if (search != 0) {
				var data = "<table><tr><td width='90'>Nama Acara</td><td>: " + search.nama_acara + "</td></tr><tr><td>Harga Tiket</td><td>:  Rp. " + search.harga_tiket + "</td></tr><tr><td>Lokasi</td><td>:  " + search.lokasi + "</td></tr></table>";
				$('.detail-acara').html(data);
			}
		}

	});
}