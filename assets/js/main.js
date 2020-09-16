function openNav() {
  document.getElementById("mobil-menu").style.width = "250px";
}
function closeNav() {
  document.getElementById("mobil-menu").style.width = "0";
}



$(window).scroll(function () {
  var navbar = $(".menu");
  if ($(window).scrollTop() > 75) {
    navbar.addClass("primaryBg");
  } else {
    navbar.removeClass("primaryBg");
  }
});




/* User Login */
$(".email-signup").hide();
$(".email-reset").hide();
$("#signup-box-link").click(function () {
  $(".email-login").fadeOut(100);
  $(".email-reset").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $(".forgot-password").removeClass("active");
  $("#signup-box-link").addClass("active");
});

$("#login-box-link").click(function () {
  $(".email-login").delay(100).fadeIn(100);
  $(".email-signup").fadeOut(100);
  $(".email-reset").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
  $(".forgot-password").removeClass("active");
});

$(".forgot-password").click(function () {
  $(".email-reset").delay(100).fadeIn(100);
  $(".email-login").fadeOut(100);
  $(".email-signup").fadeOut(100);
  $(".forgot-password").addClass("active");
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").removeClass("active");
});


//FormList Choice
$(".item-form").hide();
$(".money-form").hide();

$(".itemActive").show();

$("#form-box-link").click(function () {
  $(".money-form").fadeOut(100);
  $(".item-form").delay(100).fadeIn(100);
  $("#formoney-box-link").removeClass("active");
  $("#form-box-link").addClass("active");
});
$("#formoney-box-link").click(function () {
  $(".money-form").delay(100).fadeIn(100);
  $(".item-form").fadeOut(100);
  $("#formoney-box-link").addClass("active");
  $("#form-box-link").removeClass("active");
});

//Get the button
// var mybutton = document.getElementById("myBtn");

// // When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function () { scrollFunction() };

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


/* Total Price Show */

$(".donat-level-btn").click(function () {
  var price = $(this).val();
  $("#priceInput").val(price);
  $('.final-amount-total').text($("#priceInput").val());
});

$("#priceInput").each(function () {
  $('.final-amount-total').text($("#priceInput").val());
}).on('keyup',function () {
  $('.final-amount-total').text($("#priceInput").val());
});


/* User Profile Tabs */
$("#prof-securety").hide();
$("#prof-follows").hide();
$("#password-change").hide();
$("#prof-sec").click(function () {
  $("#prof-settings").fadeOut(100);
  $("#prof-follows").fadeOut(100);
  $("#password-change").fadeOut(100);
  $("#prof-securety").delay(100).fadeIn(100);
  $("#prof-set").removeClass("active");
  $("#prof-foll").removeClass("active");
  $("#pass-change").removeClass("active");
  $("#prof-securety").addClass("active");
});
$("#prof-set").click(function () {
  $("#prof-settings").delay(100).fadeIn(100);
  $("#prof-follows").fadeOut(100);
  $("#prof-securety").fadeOut(100);
  $("#password-change").fadeOut(100);
  $("#prof-set").addClass("active");
  $("#prof-securety").removeClass("active");
  $("#pass-change").removeClass("active");
});
$("#prof-foll").click(function () {
  $("#prof-follows").delay(100).fadeIn(100);
  $("#prof-securety").fadeOut(100);
  $("#prof-settings").fadeOut(100);
  $("#password-change").fadeOut(100);
  $("#prof-foll").addClass("active");
  $("#prof-securety").removeClass("active");
  $("#prof-settings").removeClass("active");
  $("#pass-change").removeClass("active");
});
$("#pass-change").click(function () {
  $("#password-change").delay(100).fadeIn(100);
  $("#prof-securety").fadeOut(100);
  $("#prof-settings").fadeOut(100);
  $("#prof-foll").addClass("active");
  $("#prof-securety").removeClass("active");
  $("#prof-settings").removeClass("active");
});

/* Password */
function myFunction() {
  var x = document.getElementById("myPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myNewFunction() {
  var y = document.getElementById("myNewPass");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
function myNew2Function() {
  var y = document.getElementById("myNew2Pass");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
//Giriş Ekranı Kullanici
function myFunction2() {
  var x = document.getElementById("k_pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myNewFunction2() {
  var y = document.getElementById("c_pass");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

function myNew2Function2() {
  var y = document.getElementById("c_pass2");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
//Şifre resetlerken görünme olayı
function myNewFunction3() {
  var y = document.getElementById("newPassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
function myNew2Function3() {
  var y = document.getElementById("newPasswordAgain");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
/*Phone Number Edit*/
const input = document.getElementById("phone");

input.addEventListener('input', (e) => {
   input.value = processForDisplay(e.target.value);
});

// character is a number
const isValidChar = (char) => {
   let charCode = char.charCodeAt(0);
   if (charCode >= 48 && charCode <= 57) {
        return true;
    } else {
      return false;
    }
}

const processForDisplay = (str) => {
  // only return valid characters
  let ar = str.split('');
  let disAr = ar.map(char => {
    if (isValidChar(char)) {
      return char;
    } else {
      return "";
    }
  });
  
  // trim whitespace
  disAr = disAr.join('').trim().split('');
  
  // check the length
  if (disAr.length > 10) {
    disAr = disAr.slice(0,10);
  }
  
  // 
  if (disAr.length >= 1) {
    disAr.splice(0, 0, '(');
  }
  
  if (disAr.length > 4) {
    disAr.splice(4, 0, ')');
  }
  
  if (disAr.length > 5) {
    disAr.splice(5, 0, ' ');
  }
  
  if (disAr.length > 9) {
    disAr.splice(9, 0, '-');
  }
  
  return disAr.join('');
}


