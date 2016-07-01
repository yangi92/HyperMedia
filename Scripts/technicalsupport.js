$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'TechnicalSupportFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.tabella').html(response);
                }
            }); 
});