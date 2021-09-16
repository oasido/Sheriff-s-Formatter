function openSlideMenu(){
  document.getElementById('menu').style.width = '25rem';
  // document.getElementById('content').style.marginLeft = '250px';
}
function closeSlideMenu(){
  document.getElementById('menu').style.width = '0';
  // document.getElementById('content').style.marginLeft = '0';
}  


function searchName() {
  var mdc = document.getElementById("mdc").value;
  var myUrl = "https://ls-rp.io/?page=lspd&select=records&p=";
  mdc = mdc.replace(/\s/g, "_");
  window.open(myUrl + mdc, '_blank');
}

// fix the close button upon scroll

$(document).ready(function(){

  $('#menu').scroll(function() {
    $('.fixme').css('top', $(this).scrollTop() + "px");
    $('.fixme').css('background', "#111");
    // console.log("event fired");
  });
  
});

