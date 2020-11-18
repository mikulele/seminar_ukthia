function changeBG(one, two, on, hidden, onn, hiddenn){
    var elem = document.getElementById(one);
    var elemm = document.getElementById(two);
    var on = document.getElementById(on);
    var hidden = document.getElementById(hidden);
    var onn = document.getElementById(onn);
    var hiddenn = document.getElementById(hiddenn);
    elem.style.zIndex = "2";
    elemm.style.zIndex = "1";
    elem.style.border = "solid 1px #33bff9";
    elemm.style.border = "solid 1px #ccd1de";
    elem.style.color = "#fff";
    elemm.style.color = "#212121";
    elem.style.background = "#33bff9";
    elemm.style.background = "transparent";
    on.style.display = "block";
    hidden.style.display = "none";
    onn.style.display = "block";
    hiddenn.style.display = "none";

}
function popup(el, display){
    var el = document.getElementById(el);
    el.style.display = display;
}
function popupSlide(el, elem, none, block){
    var el = document.getElementById(el);
    var elem = document.getElementById(elem);
    el.style.display = none;
    elem.style.display = block;
}

function popupGacha(satu, dua, tiga){
  var satu = document.getElementById(satu);
  var dua = document.getElementById(dua);
  var tiga = document.getElementById(tiga);

  satu.style.background = "#0f0";
}

// // Select all links with hashes
// $('a[href*="#"]')
//   // Remove links that don't actually link to anything
//   .not('[href="#"]')
//   .not('[href="#0"]')
//   .click(function(event) {
//     // On-page links
//     if (
//       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
//       &&
//       location.hostname == this.hostname
//     ) {
//       // Figure out element to scroll to
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       // Does a scroll target exist?
//       if (target.length) {
//         // Only prevent default if animation is actually gonna happen
//         event.preventDefault();
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 1000, function() {
//           // Callback after animation
//           // Must change focus!
//           var $target = $(target);
//           $target.focus();
//           if ($target.is(":focus")) { // Checking if the target was focused
//             return false;
//           } else {
//             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//             $target.focus(); // Set focus again
//           };
//         });
//       }
//     }
//   });
