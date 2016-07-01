     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'Highlights.php',
                dataType : 'html',
                success: function(response) {
                    $('.firstrow').html(response);
                }
            }); 
     });
