     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/shoppingCartFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.centralBox').html(response);
                }
            }); 
     });