$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/personalservicesFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
            }
    }); 
});