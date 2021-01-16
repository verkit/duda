$(document).ready(function(){
    var price;

    $('input:radio[name="layanan"]').on('change',function(e){
        $("#pickedLayanan").val(e.target.value);
        $("#kuponFIX").val('');
        $("#alertKupon").css('display','none');
        $("#inputKupon").removeClass(' is-valid has-success').removeAttr("disabled").val('');
        $("#msgKupon").text("").removeClass(' text-success');
        $("#btnCekKupon").css('display','block');   
        $("#btnGantiKupon").css('display','none');
        $("#txt_produk").text('');
        $("#txt-harga-produk").text('');
        $("#txt-total-normal").text('').css('display','none');
        $("#txt-total").css('display','none');
        var keywordForm = ('<div class="form-group" id="form-keyword"><label for="keyword">Input Keyword</label><input class="form-control border-bg-d InputKeyword" id="keyword" aria-describedby="emailHelp" placeholder="Enter email"><small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small></div>');
        var kategoriButton = ('<div id="appended" class="form-group your-name">'+
        '<div class="col-xl-12 row pt-25 pb-50 custom-ln-border">'+
            '<h3 class="text-center text-custom mb-3">Silahkan Pilih Kategori Layanan</h3>'+
                '<div class="row ml-5 mr-5" id="kategori">'+
                '</div>'+
            '</div>'+
        '</div>');
        $("#appended-produk").remove();
        // console.log(e);
        var id_layanan = e.target.value;
        if(id_layanan != 1){
            if ($("#form-keyword").length==0) {
                $("#keyword").append(keywordForm);
            }
        }else{
            $("#form-keyword").remove();
        }
        if (id_layanan && $("#appended").length == 0) {
            $('#tujuan').append(kategoriButton);
        }

        // SHOW NAME
        $.get('/has-selected-layanan?layanan_id=' + id_layanan, function(data){
            $.each(data, function(i, res){
                $("#txt_layanan").text(res.service_name);
            });
        });

         // SHOW NAME
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
                    ' class="custom-kn-span">'+kategoriObj.sub_service_name+''+
                    '</span>'+
                '</label>'+
            '</div>'
            );
          $('#kategori').append(layanan);


        // PRODUK KLIK RADIO KATEGORI
      $('input:radio[name=kategori]').on('change',function(ae){
        // DISKON ?
        $("#kuponFIX").val('');
        $("#alertKupon").css('display','none');
        $("#inputKupon").removeClass(' is-valid has-success').removeAttr("disabled").val('');
        $("#msgKupon").text("").removeClass(' text-success');
        $("#btnCekKupon").css('display','block');   
        $("#btnGantiKupon").css('display','none');
        $("#txt_produk").text('');
        $("#txt-harga-produk").text('');
        $("#txt-total-normal").text('').css('display','none');
        $("#txt-total").css('display','none');

        
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
                        '<input type="email" class="form-control NamaLayanan" id="namaLAYANAN" placeholder="Nama Layanan">'+
                        '<small id="emailHelp" class="form-text text-muted"></small>'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-xl-12 logLayanan">'+
                        '<div class="form-group">'+
                        '<label for="exampleInputEmail1">Harga Layanan</label>'+
                        '<input type="email" class="form-control HargaLayanan" id="hargaLAYANAN" placeholder="Harga Layanan">'+
                        '<small id="emailHelp" class="form-text text-muted"></small>'+
                      '</div>'+
                    '</div>');
        var id_kategori = ae.target.value;
        $.get('/has-selected-category?kategori_id=' + id_kategori, function(data){
            $.each(data, function(i, res){
                $("#txt_kat_layanan").text(res.sub_service_name );
            });
        });
        if (id_kategori==1) {
            $("#pickedCategory").val(id_kategori);
            if($(".logLayanan").length == 0){
                $("#kategori").append(customOption);
                $("#namaLAYANAN").keyup(function(){
                    var lyn = $("#namaLAYANAN").val();
                    // alert(lyn);
                    $("#txt_produk").text(lyn).css('display','block');
                });
                $("#hargaLAYANAN").keyup(function(){
                    var lyn = $("#hargaLAYANAN").val();
                    $("#txt-total-normal").text('Rp. ' + lyn).css('display','block');
                    $("#txt-harga-produk").text('Rp. ' + lyn).css('display','block');
                });
            }
        }else if(id_kategori!=1){
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
                    '<span class="custom-kn-span">'+produkObj.product_name+'</span>'+
                    '</label>'+
                    '</div>'
                );
              $('#produk').append(produk);
            }
        });
        $('input:radio[name=produk]').on('change', function(az){
            $("#idProduk").val($(this).attr("id"));
            $.get('/has-selected-product?product_id=' + $(this).attr("id"), function(data){
                $.each(data, function(i, res){
                    $("#idProdukFIX").val(res.id);
                    $("#txt_produk").text(res.product_name );
                    $("#txt-harga-produk").text('Rp. '+res.price);
                    $("#txt-total-normal").text('Rp. '+res.price).css('display','block');
                    $("#txt-total").css('display','none');
                });
            });
            $("#kuponFIX").val('');
            $("#alertKupon").css('display','none');
            $("#inputKupon").removeClass(' is-valid has-success').removeAttr("disabled").val('');
            $("#msgKupon").text("").removeClass(' text-success');
            $("#btnCekKupon").css('display','block');   
            $("#btnGantiKupon").css('display','none');
            // alert();
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







var code;
function createCaptcha() {
  //clear the contents of captcha div first
  document.getElementById('captcha').innerHTML = "";
  var charsArray =
  "0123456789amnopqrstuvwbcdefghijklxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 150;
  canv.height = 70;
  var ctx = canv.getContext("2d");
  ctx.font = "40px Georgia";
  ctx.strokeText(captcha.join(""), 0, 50);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
function validateCaptcha() {
  event.preventDefault();
  debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    alert("Valid Captcha");
    createCaptcha();
  }else{
    var errormsg = 'Warning';
    var errorbody = 'Anda tidak dapat melanjutkan ke Project Proposal, silahkan pilih Produk Layanan Terlebih dahulu !!!';
    $('#alert-modal').modal('show');
    $('#modal-message').html(errormsg);
    $('#error-body').html(errorbody);
    createCaptcha();
  }
}
$(document).ready(function(){
    createCaptcha();
});

$(document).ready(function(){
    var id_coupon = '';
    $("#btnSelesai").on('click', function(){
    
    var id_product = $("#idProdukFIX").val();
    id_coupon = $("#kuponFIX").val();
    var link;
    var name = $("#thisNamaLengkap").val();
    var email = $("#thisEmail").val();
    var nohp = $("#thisNoHp").val();
    var links_keyword='';
    var custom_product;

    if ($("#pickedLayanan").val()!=1) {
        links_keyword = $(".InputKeyword").val();        
    }else{
        links_keyword = '';
    }


        // GAADA KUPON
    if (!id_coupon){
        price = $("#txt-total-normal").text().replace('Rp. ', '');
    }else{
        price = $("#txt-total").text().replace('Rp. ', '');
    }
    if ($("#pickedCategory").val()==1) {
        custom_product = $("#txt_produk").text();
    }


    // var dw = $('#CCExp').val($('#Month').val() + '/' + $('#Year').val());
        var fa;
        var fb;
        var fc;
        var fd;
        var fe;
        if ($(".tm1").attr('name')) {
            var linka = $(".tm1").attr('name');
            fa = linka+', ';
        }else{
            fa = '';
        }
        if ($(".tm2").attr('name')) {
            var linkb = $(".tm2").attr('name');
            fb = linkb+', ';
        }else{
            fb = '';
        }
        if ($(".tm3").attr('name')) {
            var linkc = $(".tm3").attr('name');
            fc = linkc+', ';
        }else{
            fc = '';
        }
        if ($(".tm4").attr('name')) {
            var linkd = $(".tm4").attr('name');
            fd = linkd+', ';
        }else{
            fd = '';
        }
        if ($(".tm5").attr('name')) {
            var linke = $(".tm5").attr('name');
            fe = linke+', ';
        }else{
            fe = '';
        }

        // link = fa + fb +fc + fd + fe;
        // alert(links_keyword);
        // alert($('.length0').children().html() + "," + $('.length1').children().html());
        var link = '';
        if ($('.length0')[0]) {
            link = $('.length0').children().html();
        }
        if ($('.length1')[0]) {
            link = $('.length1').children().html() + ", " + $('.length0').children().html() + ", ";
        }
        if ($('.length2')[0]) {
            link = $('.length2').children().html() + ", " +$('.length1').children().html() + ", " + $('.length0').children().html() + ", ";
        }
        if ($('.length3')[0]) {
            link = $('.length3').children().html() + ", " + $('.length2').children().html() + ", " +$('.length1').children().html() + ", " + $('.length0').children().html() + ", ";
        }
        if ($('.length4')[0]) {
            link = $('.length4').children().html() + ", " + $('.length3').children().html() + ", " + $('.length2').children().html() + ", " +$('.length1').children().html() + ", " + $('.length0').children().html() + ", ";
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
            type: 'POST',
            url: '/postPesanSkrg',
            data: {
                "id_product": id_product,
                "id_coupon" : id_coupon,
                "link" : $("#thisURLLink").val(),
                "catatan" : $("#exampleFormControlTextarea1").val(),
                "status" : "pending",
                "price" : price,
                "name" : name,
                "email" : email,
                "hp" : nohp,
                "links_keyword" : link,
                "custom_product" : custom_product,
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
});
});
