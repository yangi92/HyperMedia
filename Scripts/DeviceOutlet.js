     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/DeviceOutletFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
                }
            }); 
     });
$(function(){
     
     var $bnts = $('.filter-button').click(function(){
         $('#parent .device').fadeIn(450); 
         if (this.id == 'all') {
             $('#parent .device').fadeIn(450);  
         }
         if(this.id =='pr'){
             var from= parseInt($(this).find('.from').text(),10);
             var to = parseInt($(this).find('.to').text(),10);
             $('#parent .device').each(function(){
                 var prezzo=parseInt($(this).find('.price').text(),10);
                 if(prezzo > to || prezzo < from){
                     $(this).fadeOut(450);
                 }
                 
             })                                
                       
            } 
         
     })
     
});     