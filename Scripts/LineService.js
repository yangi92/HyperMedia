$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'LineServiceFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.tabella').html(response);
                }
            }); 
});