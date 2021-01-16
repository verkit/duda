$(document).ready(function(){
  $.get('/getBank', function(data){
    $.each(data, function(index, items){
      $("#tujuanBank").append('<option value="'+items.id+'">'+items.bank_name+'</option>');
    });
  })
  
});

function valUsername() {
    var msg;
    var element = document.getElementById("username");
    var x = document.getElementById("username").value;
    var L =  x.length;

    if(L <= 4){
      msg = "Username minimal 4 huruf";
      element.classList.add("border-danger");
    }else{
      msg = "";
      element.classList.remove("border-danger");
    }
    document.getElementById("UsernameMessage").innerHTML = msg;
  }
  function valInvoice() {
    var msg;
    var element = document.getElementById("invoice");
    var x = document.getElementById("invoice").value;
    var L =  x.length;

    if(L == 6){
      msg = "";
      $(".btnKirim").attr("type","submit");
      element.classList.remove("border-danger");
    }else{
      $(".btnKirim").attr("type","button");
      msg = "Nomor Invoice memiliki 6 Digit";
      element.classList.add("border-danger");
    }
    document.getElementById("InvoiceMessage").innerHTML = msg;
  }
  function valEmail() {
    var msg;
    var result
    var element = document.getElementById("email");
    var x = document.getElementById("email").value;
    var patt = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    result = x.match(patt);
    if (!result) {
      msg = x + " Bukanlah email yang valid";
      element.classList.add("border-danger");
    }else{
      msg = "";
      element.classList.remove("border-danger");
    }
    document.getElementById("EmailMessage").innerHTML = msg;
  }
  function preview(event) {
    var input = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(){
      var result = reader.result;
      var img = document.getElementById('img');
      img.src = result;
    }
    document.getElementById("name_image").innerHTML = input.name;
    reader.readAsDataURL(input);
  }