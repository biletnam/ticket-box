$(function(){
   $('#nomor_identitas').keyup(function(){
    var search = $(this).val();
    var CSRF_TOKEN = $('#token').attr('content');
    $.ajax({
        url     : "/search-customer",
        type    : "POST",
        data    : {
            'search' : search,
            '_token' : CSRF_TOKEN
        },
        success: function(search){
            if (search != 0) {
                $('#user_id').val(search.id);
                $('#nama').val(search.nama);
                $('#email').val(search.email);
                $('#umur').val(search.umur);
                if (search.jenis_kelamin == 'Laki-laki') {
                    $('#radio-laki').attr('class', 'radio checked');
                    $('#radio-perempuan').attr('class', 'radio');
                } else {
                    $('#radio-perempuan').attr('class', 'radio checked');
                    $('#radio-laki').attr('class', 'radio');
                }
            } else {
                $('#user_id').val(null);
                $('#nama').val(null);
                $('#email').val(null);
                $('#umur').val(null);
                $('#radio-laki').attr('class', 'radio checked');
                $('#radio-perempuan').attr('class', 'radio');
            }
        }
    });
});
});