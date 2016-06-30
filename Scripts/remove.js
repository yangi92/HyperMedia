
$(function(){
    $('.remove').on('click', function deleteme(delid){
     window.location.href='removeItem.php?del_id='+delid+'';
        return true;
});
});

