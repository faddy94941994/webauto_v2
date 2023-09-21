//     Register Step
    $('#btnstep01').on('click', function () {
            $('.re01').hide();     
            $('.re02').show();    
            $('.stepregis.step01').removeClass("active"); 
            $('.stepregis.step02').addClass("active"); 
    });
    $('#btnstep02').on('click', function () {
            $('.re02').hide();     
            $('.re03').show();        
            $('.stepregis.step02').removeClass("active"); 
            $('.stepregis.step03').addClass("active"); 
    });
    $('#btnstep03').on('click', function () {
            $('.re01').hide();   
            $('.re02').hide();   
            $('.re03').hide();   
            $('.re04').show();    
            $('.stepregis.step03').removeClass("active"); 
            $('.stepregis.step04').addClass("active"); 
            setTimeout(function(){ location.href='dashboard.php'; }, 2000);    
    });
   // Register Step 


//  Promotion Slide
  var swiper = new Swiper(".prosw", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 30,
         effect: "coverflow",
        grabCursor: true,
        initialSlide: 1,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 500,
          modifier: 1,
          slideShadows: true,
        },
        navigation: {
          nextEl: ".btnrightslide",
          prevEl: ".btnleftslide",
        },
    });
//  Promotion Slide


// Casino Slide
  var swiper = new Swiper(".casinosw", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 30,
         effect: "coverflow",
        grabCursor: true,
        initialSlide: 1,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 500,
          modifier: 1,
          slideShadows: true,
        },
        navigation: {
          nextEl: ".btngameright",
          prevEl: ".btngameleft",
        },
    });
// Casino Slide



// Slot Slide
  var swiper = new Swiper(".slotsw", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 30,
         effect: "coverflow",
        grabCursor: true,
        initialSlide: 1,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 500,
          modifier: 1,
          slideShadows: true,
        },
        navigation: {
          nextEl: ".btnslotright",
          prevEl: ".btnslotleft",
        },
    });
// Slot Slide



// BroadCast Slide
    var swiper = new Swiper(".bcsw", {
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".btnbcright",
          prevEl: ".btnbcleft",
        },
      });
// BroadCast Slide


// Menu Tab
function OpenMenu(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("menucontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
$( ".hidemenu,.overlaymenu" ).click(function() {
  tabcontent = document.getElementsByClassName("menucontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
});
// Menu Tab



// Withdraw
$( ".nmwd" ).click(function() {
  $( ".containdeposit" ).show();
  $( ".nmwdcontain" ).show();
  $( ".backwd" ).show();
  $( ".selectcontainer" ).hide();
});
$( ".rtwd" ).click(function() {
  $( ".containdeposit" ).show();
  $( ".rtwdcontain" ).show();
  $( ".backwd" ).show();
  $( ".selectcontainer" ).hide();
});
$( ".backwd" ).click(function() {
  $( ".selectcontainer" ).show();
  $( ".containdeposit" ).hide();
  $( ".nmwdcontain" ).hide();
  $( ".rtwdcontain" ).hide();
  $( ".backwd" ).hide();
});


// Withdraw







// Friends Copy Link


// Copy---------------------------------------------------------
$(document).ready(function(){
  $(".copybtn").click(function(event){
    var $tempElement = $("<input>");
    $("body").append($tempElement);
    $tempElement.val($(this).closest(".copybtn").find("span").text()).select();
    document.execCommand("Copy");
    $tempElement.remove();

  });
});
function copylink(){
  $(".myAlert-top").show();
  setTimeout(function(){
    $(".myAlert-top").hide(); 
  }, 1500);
}



$(".copylink").click(function(event){
   var copyText = document.getElementById("friendlink");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");

  });


// Copy---------------------------------------------------------


// Friends Copy Link


// Alert
    var swiper2 = new Swiper('.swiper-container-2', {
       slidesPerView: 'auto',
      centeredSlides: true,
      spaceBetween: 30,
      initialSlide:1,
      observer: true,
  observeParents: true,
      // autoplay: {
      //   delay: 3500,
      //   disableOnInteraction: false,
      // },
       navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
    });
// Alert






function gotoregister(){
  $("#registersection").show()
  $("#loginsection").hide()
  $("#forgetsection").hide()
}


function gotologin(){
  $("#loginsection").show()
  $("#registersection").hide()
  $("#forgetsection").hide()
}


function gotoforget(){
  $("#registersection").hide()
  $("#loginsection").hide()
  $("#forgetsection").show()
}



function changepwd(){
  $(".changepassword").toggleClass("d-block");
}











