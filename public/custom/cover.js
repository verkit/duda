
    $("#next1").click(function(){
        var selected = $(this).children("option:selected").val();
        var varLayanan = $("#layanan")[0].selectedIndex <= 0;
        var varKategori = $("#kategori")[0].selectedIndex <= 0;
        var varProduk = $("#produk")[0].selectedIndex <= 0;
        var errorLayanan = "Silahkan pilih layanan";
        var errorKategori = "Silahkan pilih kategori";
        var errorProduk = "Silahkan pilih produk";
        if (varLayanan && varLayanan) {
            $("#layanan").addClass("border-danger");
            $("#errorLayanan").html(errorLayanan);
            $("#kategori").addClass("border-danger");
            $("#errorKategori").html(errorKategori);
        }   
        else if (varLayanan) {
            $("#layanan").addClass("border-danger");
            $("#errorLayanan").html(errorLayanan);
        }else if (varKategori) {
            $("#kategori").addClass("border-danger");
            $("#errorKategori").html(errorKategori);
        }else if(!varLayanan && selected != 1){
            if (varProduk) {
                $("#produk").addClass("border-danger");
                $("#errorProduk").html(errorProduk);
            }
        }
        else{

            $(".custom-redirect-2").addClass("active");
            $(".custom-redirect-1").removeClass("active");
            $(".custom-body-redirect-2").addClass(" show active");
            $(".custom-body-redirect-1").removeClass(" show active");                                                
        }
    });
    $("#prev1").click(function(){
        $(".custom-redirect-1").addClass("active");
        $(".custom-redirect-2").removeClass("active");
        $(".custom-body-redirect-1").addClass(" show active");
        $(".custom-body-redirect-2").removeClass(" show active");                                                
    });
    $(document).ready(function(){
        $("select#layanan").change(function(){
            var selected = $(this).children("option:selected").val();
            var forms = '<div class="your-name" id="appended"><input type="text" placeholder="TEXT KHUSUS*"></div>';
            $("#errorLayanan").empty();
            $("#layanan").removeClass("border-danger");
        if (selected != 1) {
            if ($("#appended").length == 0) {
                $("#tujuan").append(forms);
                $('#produk').removeAttr("disabled");
            }
        }else if(selected == 1){
            $(".added-product").remove();
                $('#produk').attr("disabled","true");
            if ($("#appended").length != 0) {
                $("#appended").remove();
                $('#produk').append('<option disabled selected>Pilih Produk Layanan ... </option>');
                $('.disable-class').remove();
            }
        }

        });
    });
    $('#kategori').on('change',function(e){
        $("#errorKategori").empty();
        $("#kategori").removeClass("border-danger");
        console.log(e);
        var id_kategori = e.target.value;
        
        $.get('/json-produk?kategori_id=' + id_kategori, function(data){
          $('#produk').empty();
          $('#produk').append('<option value="0" selected="true" disabled="true">Pilih Produk ...</option>')
        $.each(data, function(index, produkObj){
          $('#produk').append('<option class="added-product" value="'+ produkObj.id +'">'+produkObj.name+'</option>')  
        })
        });
    });