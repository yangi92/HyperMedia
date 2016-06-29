$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/whoweareFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.content').html(response);
                }
            }); 
     });