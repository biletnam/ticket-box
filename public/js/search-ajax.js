$(function(){
 $('#search').keyup(function(){
            var search = $(this).val();
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url     : "/search",
                type    : "POST",
                data    : {
                    'search' : search,
                    '_token' : CSRF_TOKEN
                },
                success: function(search){
                    if (search != 0) {
                        $('.read').html(search);                        
                    } else {                   
                        $('.read').html("<tr><td colspan=7> Tidak ditemukan</td></tr>");
                        console.log('tidak ditemukan')
                    }
                }
            });
        });
});