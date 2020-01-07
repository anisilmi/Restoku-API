// $(rating).ready(function(){
//   $('.heart').on('click', function(){
//     var onHeart = parseInt($(this).data('value'), 10); // The star currently selected
//     var hearts = $(this).parent().children('li');
    
//     for (i = 0; i < hearts.length; i++) {
//       $(hearts[i]).removeClass('selected');
//     }
    
//     for (i = 0; i < onHeart; i++) {
//       $(hearts[i]).addClass('selected');
//     }
//   });
// });

$(document).ready(function(){
  $('.heart').on('mouseover', function(){
    var onHeart = parseInt($(this).data('value'), 10); // The star currently mouse on
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('.heart').each(function(e){
      if (e < onHeart) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    console.log('length');
  }).on('idle', function(){
    $(this).parent().children('.heart').each(function(e){
      $(this).removeClass('hover');
    });
  });
  });

//   $('.heart').on('click', function(){

//     var onHeart = parseInt($(this).data('value'), 10); // The star currently selected
//     var hearts = $(this).parent().children('.heart');
    
//     for (i = 0; i < hearts.length; i++) {
//       $(stars[i]).removeClass('selected');
//     }
    
//     for (i = 0; i < onHeart; i++) {
//       $(hearts[i]).addClass('selected');
//     }  
//     // $('.heart').removeClass('selected');
//     // $(this).addClass('selected');
//   });
// });

// $(document).ready(function(){
  
//   /* 1. Visualizing things on Hover - See next part for action on click */
//   $('#stars li').on('mouseover', function(){
//     var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
//     // Now highlight all the stars that's not after the current hovered star
//     $(this).parent().children('li.star').each(function(e){
//       if (e < onStar) {
//         $(this).addClass('hover');
//       }
//       else {
//         $(this).removeClass('hover');
//       }
//     });
    
//   }).on('mouseout', function(){
//     $(this).parent().children('li.star').each(function(e){
//       $(this).removeClass('hover');
//     });
//   });
  
  
//   /* 2. Action to perform on click */
//   $('#stars li').on('click', function(){
//     var onStar = parseInt($(this).data('value'), 10); // The star currently selected
//     var stars = $(this).parent().children('li.star');
    
//     for (i = 0; i < stars.length; i++) {
//       $(stars[i]).removeClass('selected');
//     }
    
//     for (i = 0; i < onStar; i++) {
//       $(stars[i]).addClass('selected');
//     }  
  
// });