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
         if(this.id =='scr'){
             var from= parseInt($(this).find('.from').text(),10);
             var to = parseInt($(this).find('.to').text(),10);
             $('#parent .device').each(function(){
                 var screen=parseInt($(this).find('.screen').text(),10);
                 if(screen > to || screen <=from){
                     $(this).fadeOut(450);
                 }  
             })                                
                       
            } 
            if(this.id =='cmr'){
             var from= parseInt($(this).find('.from').text(),10);
             var to = parseInt($(this).find('.to').text(),10);
             $('#parent .device').each(function(){
                 var camera=parseInt($(this).find('.camera').text(),10);
                 if(camera > to || camera <=from){
                     $(this).fadeOut(450);
                 }  
             })                                
                       
            }
         
     })
});

     $(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/tabletFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
                }
            }); 
     });
