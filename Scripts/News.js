$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/TheGroup_NewsFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.content').html(response);
                }
            }); 
     });