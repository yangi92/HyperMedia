$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'homefamilyFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
                }
            }); 
});