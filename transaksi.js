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
