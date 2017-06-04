$(function(){
 $('#email').keyup(function(){
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
                $('#email-container').attr('class', 'form-group has-error');
            } else {
                $('#email-container').attr('class', 'form-group');
            }
        }
    });
});
});