     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/sloutletFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
                }
            }); 
     });