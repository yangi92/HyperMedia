$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'whoweareFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.content').html(response);
                }
            }); 
     });