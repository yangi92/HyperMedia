$(function(){
$('.colorBox').on('click', function(){
    $('.colorBox').removeClass('selected');
    $(this).addClass('selected');
});
});

function goBack() {
    window.history.back();
}

