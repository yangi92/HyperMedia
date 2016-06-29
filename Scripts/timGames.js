
$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'timGamesFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
                }
            }); 
});