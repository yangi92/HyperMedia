$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'TheGroup_NewsFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.content').html(response);
                }
            }); 
     });