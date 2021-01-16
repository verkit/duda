

  $("#next1").click(function(){
     var layananX = $("input[name='layanan']:checked").val();
     var kategoriX = $("input[name='kategori']:checked").val();
     var produkX = $("input[name='produk']:checked").val();
     var inputTag = $(".tag").length;
     var namaLayanan = $(".NamaLayanan");
     var hargaLayanan = $(".HargaLayanan");
     var KeyWord = $(".InputKeyword");
     var errormsg;
     var errorbody;
     var existsClass = $("#tujuan").hasClass("appended-produk");
     if (!layananX) {
        errormsg = 'Warning';
        errorbody = 'Anda tidak dapat melanjutkan ke Project Proposal, silahkan pilih Layanan Terlebih dahulu !!! Kemudian pilihlah Kategori Dari Layanan ...'; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);

     }else if(namaLayanan.length!=0 && !(namaLayanan.val())){
        errormsg = 'Warning';
        errorbody = 'Silahkan Isi Nama Layanan Terlebih Dahulu !!! '; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);
     }else if(hargaLayanan.length!=0 && !(hargaLayanan.val())){
        errormsg = 'Warning';
        errorbody = 'Silahkan Isi Harga Layanan Terlebih Dahulu !!! '; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);
     }
     else if(KeyWord.length!=0 && !(KeyWord.val())){
        errormsg = 'Warning';
        errorbody = 'Silahkan Isi Keyword Terlebih Dahulu !!! '; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);
     }
     else if (inputTag==0) {
        errormsg = 'Warning';
        errorbody = 'Silahkan Isi URL Terlebih Dahulu !!! '; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);
     }
     else if(!kategoriX){
        errormsg = 'Warning';
        errorbody = 'Anda tidak dapat melanjutkan ke Project Proposal, silahkan pilih Kategori Layanan Terlebih dahulu !!!'; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);
     }else if ($("#appended-produk").length != 0 && !produkX) {
        errormsg = 'Warning';
        errorbody = 'Anda tidak dapat melanjutkan ke Project Proposal, silahkan pilih Produk Layanan Terlebih dahulu !!!'; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);
     }else{
        $(".custom-redirect-2").addClass("active");
        $(".custom-redirect-1").removeClass("active");
        $(".custom-body-redirect-2").addClass(" show active");
        $(".custom-body-redirect-1").removeClass(" show active");  
     }
    
  })      
            
        
