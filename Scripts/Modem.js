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
         if(this.id =='mob'){
             var from= $(this).find('.from').text();
             if(from=="Yes"){
                 var fromNum=1;
             }
             else var fromNum=0;
             $('#parent .device').each(function(){
                 var screen=parseInt($(this).find('.mobile').text(),10);
                 if(screen !=fromNum){
                     $(this).fadeOut(450);
                 }  
             })                                
                       
            } 
            if(this.id =='spd'){
             var from= parseInt($(this).find('.from').text(),10);
             var to = parseInt($(this).find('.to').text(),10);
             $('#parent .device').each(function(){
                 var speed=parseInt($(this).find('.speed').text(),10);
                 if(speed > to || speed <=from){
                     $(this).fadeOut(450);
                 }  
             })                                
                       
            }
         
     })
 });


$(document).ready(function(){
            $.ajax({
                type : "POST",
                url : 'http://projectim.altervista.org/ModemFetch.php',
                dataType : 'html',
                success: function(response) {
                    $('.grid').html(response);
                }
            }); 
});