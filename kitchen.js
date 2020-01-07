$(function(){
    $('.row').click(function(){
    //    alert( $(this).attr('id') );
      let ids= $(this).attr('id');
      $("#"+ids).css("background-color","#CCFFCC");
    });
 });