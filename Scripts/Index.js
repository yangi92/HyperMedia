
     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'indexFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.centralBox').html(response);
                }
            }); 
     });
     