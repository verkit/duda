
const tagContainer = document.querySelector('.tag-container');
const input = document.querySelector('.tag-container input');
var Total = '';
var iz = $('.length0').children().html(); 
var i2 = $('.length1').children().html(); 
var i3 = $('.length2').children().html(); 
var i4 = $('.length3').children().html(); 
var i5 = $('.length4').children().html();
Total = iz;

let tags = [];
let babs = [];

function createTag(label) {
  var indexEs = $(".tag").length;
  var sl = label;
  var slug = sl.replace(/\s/g,"-");
  const div = document.createElement('div');
  div.setAttribute('class', 'tag length'+indexEs);
  const span = document.createElement('span');
  span.innerHTML = label;
  const closeIcon = document.createElement('i');
  closeIcon.innerHTML = 'close';
  closeIcon.setAttribute('class', 'material-icons tag-icon');
  closeIcon.setAttribute('data-item', label);
  closeIcon.setAttribute('id', slug)
  div.appendChild(span);
  div.appendChild(closeIcon);
  return div;
}

function clearTags() {
  document.querySelectorAll('.tag').forEach(tag => {
    
    tag.parentElement.removeChild(tag);
  });
}
document.addEventListener('click', (e) => {
  if (e.target.className === 'material-icons tag-icon') {
    const tagLabel = e.target.getAttribute('data-item');
    const index = tags.indexOf(tagLabel);
    var idZ = e.target.getAttribute('id');
    alert(idZ);
      // $("#"+idZ).removeAttr('id');
    tags = [...tags.slice(0, index), ...tags.slice(index+1)];
    addTags();    
  }
  // var idZ = e.target.getAttribute('id');
  // $("#"+idZ).remove();
})
function addTags() {
  clearTags();
  tags.slice().reverse().forEach(tag => {
    tagContainer.prepend(createTag(tag));
  });
}
function addHiddenInput(thisID){
  $("#urlXZ").html('<p id='+thisID+'>"'+thisID+'"</p>'); 
};
input.addEventListener('keyup', (e) => {
    var x = document.getElementById("inputan").value;
    // var y = document.getElementById("inputan_field")
    if (e.key === 'Enter') {
      if (x=='') {
        var errormsg = 'Warning';
        var errorbody = 'Silahkan Isi Pesan Tag Terlebih dahulu !!!'; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);
      }else{
        if($(".tag").length > 4){
            var errormsg = 'Warning';
            var errorbody = 'Anda hanya dapat mengisi maksimal 5 tags !!!'; 
            $('#alert-modal').modal('show');
            $('#modal-message').html(errormsg);
            $('#error-body').html(errorbody);
            input.value = '';
        }else if(input.value == ($(".tag span").html())){
            input.value = '';
        }
        else{
          var bfr = input.value;
          var slg = bfr.replace(/\s/g,"-");
             if ($(".tag").length==0){
              // addHiddenInput(slg);

              $("#t1").val(bfr).attr("id",slg).attr('name',bfr).attr('class','tm1');
             }else if ($(".tag").length==1){
              $("#t2").val(bfr).attr("id",slg).attr('name',bfr).attr('class','tm2');
             }else if ($(".tag").length==2){
              $("#t3").val(bfr).attr("id",slg).attr('name',bfr).attr('class','tm3');
             }else if ($(".tag").length==3){
              $("#t4").val(bfr).attr("id",slg).attr('name',bfr).attr('class','tm4');
             }else if ($(".tag").length==4){
              $("#t5").val(bfr).attr("id",slg).attr('name',bfr).attr('class','tm5');
             }
            // $("#tagged").append() 
            // $("#tagged").append(
            //   '<div class="op"><input style="display: none" type="text" value="'+input.value+'" id="'+slg+'" class="form-control customHH'+$(".tag").length+'" name="customHH"></div>');
            e.target.value.split(',').forEach(tag => {
            tags.push(tag);  
           });
           addTags();
           input.value = '';
      }}
    }
});


input.focus();