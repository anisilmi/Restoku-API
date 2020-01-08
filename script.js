$(document).ready(function(){
  $('.heart').on('mouseover', function(){
    var onHeart = parseInt($(this).data('value'), 10);
    $(this).parent().children('.heart').each(function(e){
      var value =$(this).data('value');//panggil ini buat rating
      if (e < onHeart) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
  })
});
