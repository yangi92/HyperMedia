$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'personalservicesFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
                }
            }); 
});