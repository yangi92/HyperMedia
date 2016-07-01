$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'CostPaymentFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.tabella').html(response);
                }
            }); 
});