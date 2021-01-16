
$("#btnCekKupon").on('click', function(){
	var btnGanti = '<button type="button" class="btn btn-danger btn-lg" id="btnGantiKupon">Cek Kupon</button>';
	var btnCek = '<button type="button" class="btn btn-primary btn-lg" id="btnCekKupon">Cek Kupon</button>';
	var inputKupon = $("#inputKupon");
	var idProduk = $("#idProduk").val();
	$.ajaxSetup({
		headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')				
		}
	});
	$.ajax({
		type: "POST",
		url: '/cekKupon',
		data: {
			'kodeKupon' : inputKupon.val(),
			'idProduk' : idProduk,
		},
		success: function(res){
			// alert(res.msg);
			if (res.msg == 'ok') {
				$("#kuponFIX").val(res.idKupon);
				$("#inputKupon").addClass(' is-valid has-success').attr("disabled","true");
				$("#inputKupon").removeClass(' is-invalid');	
				$("#msgKupon").removeClass(' text-danger').text("");	
				$("#msgKupon").addClass(' text-success').text("Kupon ini cocok untuk produk yang anda pilih.");
				$("#btnCekKupon").css('display','none');	
				$("#btnGantiKupon").css('display','block');
				// DISPLAY KUPPONN
				$("#alertKupon").css('display','block');
				$("#hargaAWAL").text(res.hargaAwal);
				$("#diskonTOTAL").text(res.diskonKupon);
				$("#hargaAKHIR").text(res.hargaAkhir);
				$("#txt-total").text(res.hargaAkhir).css('display','block');
                $("#txt-total-normal").css('display','none');




			}else{
				$("#alertKupon").css('display','none');					
				$("#inputKupon").addClass(' is-invalid');
				$("#msgKupon").removeClass(' text-success').text("");				
				$("#msgKupon").addClass(' text-danger').text("Kupon ini tidak cocok untuk produk yang anda pilih.");
				$("#txt-total-normal").css('display','block');
		        $("#txt-total").css('display','none');
			}
		}
	});
	$("#btnGantiKupon").on('click', function(){
		$("#kuponFIX").val('');
		$("#alertKupon").css('display','none');			
		$("#inputKupon").removeClass(' is-valid has-success').removeAttr("disabled").val('');
		$("#msgKupon").text("").removeClass(' text-success');
		$("#btnCekKupon").css('display','block');	
		$("#btnGantiKupon").css('display','none');
        $("#txt-total-normal").css('display','block');
        $("#txt-total").css('display','none');


		// $("#appendedBTN").append(btnCEK);	
	});
});

