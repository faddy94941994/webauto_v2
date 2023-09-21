$(".cancel-probtn,.confirm-probtn,.-get-promotion-btn").click(function(){
   $('.chooseprodps').modal('hide');
   $('.promotion-detail-modal-149').modal('hide');
});

$(".-link-change-password").click(function(){
   $('.js-change-password-collapse').toggleClass('d-none');
});



function openAccout(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("js-profile-account-modal");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tabaccount");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


