$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'SmartLifeAssistanceFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.tabella').html(response);
                }
            }); 
});