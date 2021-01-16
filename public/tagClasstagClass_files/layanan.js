
 
    $('input:radio[name="layanan"]').on('change',function(e){
        var kategoriButton = ('<div id="appended" class="form-group your-name">'+
        '<div class="col-xl-12 row pt-25 pb-50 custom-ln-border">'+
            '<h3 class="text-center text-custom mb-3">Silahkan Pilih Kategori Layanan</h3>'+
                '<div class="row ml-5 mr-5" id="kategori">'+
                '</div>'+
            '</div>'+
        '</div>');
        $("#appended-produk").remove();
        console.log(e);
        var id_layanan = e.target.value;
        if (id_layanan && $("#appended").length == 0) {
            $('#tujuan').append(kategoriButton);
        }
        $.get('/json-kategori?layanan_id=' + id_layanan, function(data){
          $('#kategori').empty();
        $.each(data, function(index, kategoriObj){
        var layanan = (
            '<div class="d-flex">'+
                '<input type="radio" name="kategori"'+
                ' id="kategori'+kategoriObj.id+'"'+
                'class="custom-kn-radio check" '+
                'value="'+kategoriObj.id+'">'+
                '<label for="kategori'+kategoriObj.id+'"'+
                    ' class="custom-kn-label"><span'+
                    ' class="custom-kn-span">'+kategoriObj.name+''+
                    '</span>'+
                '</label>'+
            '</div>'
            );
          $('#kategori').append(layanan);  
        

        // PRODUK
      $('input:radio[name=kategori]').on('change',function(ae){
        var produkButton = ('<div id="appended-produk" class="form-group your-name appended-produk">'+
        '<div class="col-xl-12 row pt-25 pb-50 custom-ln-border">'+
        '<h3 class="text-center text-custom mb-3">Silahkan Pilih Produk Layanan</h3>'+
        '<div class="row ml-5 mr-5 align-content-center" id="produk">'+
        '</div>'+
        '</div>'+
        '</div>');
        var customOption = (
                    '<div class="col-xl-12 logLayanan mt-4">'+
                        '<div class="form-group">'+
                        '<label for="exampleInputEmail1">Nama Layanan</label>'+
                        '<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Layanan">'+
                        '<small id="emailHelp" class="form-text text-muted"></small>'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-xl-12 logLayanan">'+
                        '<div class="form-group">'+
                        '<label for="exampleInputEmail1">Harga Layanan</label>'+
                        '<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Layanan">'+
                        '<small id="emailHelp" class="form-text text-muted"></small>'+
                      '</div>'+
                    '</div>');
        console.log(ae);
        var id_kategori = ae.target.value;
        if (id_kategori==3) {
            if($(".logLayanan").length == 0){
                $("#kategori").append(customOption);
            }
        }else if(id_kategori!=3){
            $(".logLayanan").remove();
        }
        
        $.get('/json-produk?kategori_id=' + id_kategori, function(data){
          $('#produk').empty();
        $.each(data, function(index, produkObj){
            if (produkObj.id == 0) {
                $("#appended-produk").remove();
            }else{
                if (id_kategori && $("#appended-produk").length == 0) {
                    $('#tujuan').append(produkButton);
                }
                var produk = (
                    '<div class="d-flex mx-auto ml-5 mr-5">'+
                    '<input type="radio" name="produk" id="produk'+produkObj.id+'" class="custom-kn-radio" value="'+kategoriObj.id+'">'+
                    '<label for="produk'+produkObj.id+'" class="custom-kn-label">'+
                    '<span class="custom-kn-span">'+produkObj.name+'</span>'+
                    '</label>'+
                    '</div>'
                ); 
              $('#produk').append(produk);  
            }
        });
        });
        });
        });
        });
    });
$('#refresh').click(function(){
    $.ajax({
        type: 'GET',
        url: '/refresh_captcha',
        success: function(data){
            $('.captcha span').html(data);
        }
    });    
});
$('#benerGak').click(function(){
    var captcha = $('input[name=captcha]').val();
    // alert('BISA');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/check_captcha',
        data: {
            "captcha": captcha 
        },
        success: function(data){
            if (data.msg=="gagal"){
                alert("GAGAL");
            }else{
                alert("Berhasil");
            }
        }
    });
}); 