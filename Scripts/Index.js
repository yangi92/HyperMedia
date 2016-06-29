
     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/indexFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.centralBox').html(response);
                }
            }); 
     });
     