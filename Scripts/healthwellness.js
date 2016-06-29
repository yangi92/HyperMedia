$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'healthwellnessFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
                }
            }); 
});