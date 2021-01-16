
$(document).ready(function(){
  $("#tujuan").hide();
});


function animasiKOnten(direction) {  
    var batasAnimasi = -($("#formInputan").height());
    $('#roller').animate({ "marginTop": (batasAnimasi)+ "px" }, 1000);
}
function down(){
    animasiKOnten("down")
}

function start(){
 setTimeout(function () {
    down();
 });
}    



$("#cekNow").click(function(){         
  var id = $('input[name=id]').val();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: 'POST',
      url: "/cek-order",
      data: {
        "search_post_btn" : 1,
        "id" : id
      },
      success: function(data){
        if (data.msg == 'ada') {
          $("#tujuan").show();
            setInterval(function () {
              start();
            }, 0);
          $("#contohTarget").text(data.name);
          $("#batasBayar").text(data.batas_pembayaran);
          $("#senderName").text(data.senderName);
          $("#noTrx").text("#"+data.noTrx);
          // $("#tujuan").html(data.msg);
        }else{
          $("#tujuan").hide();
          var errormsg = 'Warning';
          var errorbody = 'Anda tidak dapat melanjutkan ke Project Proposal, silahkan pilih Layanan Terlebih dahulu !!! Kemudian pilihlah Kategori Dari Layanan ...'; 
          $('#alert-modal').modal('show');
          $('#modal-message').html(errormsg);
          $('#error-body').html(errorbody);
        }
      }   
    })
})


