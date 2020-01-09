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
  
    $('.row').click(function(){
        //    alert( $(this).attr('id') );
          let ids= $(this).attr('id');
          $("#"+ids).css("background-color","#CCFFCC");
        });
    
    if(($('#id_a').val())){
        $('#hasil').html('');
        $('#hasil2').html('');
            $.ajax({
              url : 'http://localhost/restoku-api/transaksi',
              type : 'get',
              dataType : 'json',
              data : {
                  id : $('#id_a').val()
              },
              success : function(result){
                  
              if(result.status == 'True'){
                      $('#hasil').append(` 
                              <tr >
                                  <th>No.nota <br> `+result.tanggal+`</th>
                                  <th>No.Antrian<br> `+result.id+`</th>
                              </tr>
                              `);
                           let data = result.detail; 
                      $.each(data,function(i,data){
                          //  console.log(data)
                          $('#hasil2').append(`
                              <tr>
                                  <h1> aapa </h1>
                                  <td>`+data.nama+`</td>
                                  <td>`+data.jumlah+`</td>
                              </tr>
                            `);
                      })
                }else if(result.status == 'False'){
                       //console.log(result.message)
                      $('#hasil').append(`<h3 class="text-center">`+result.message+`</h3>`)
                   }
              // console.log(result.message);
              }   
            })
        }
        $('#notif').click(function(){
            $('#navbarSupportedContent-5').show();
        })
});
