"use strict";

const sm = 480;
const md = 768;
const xl = 1280;

function Error() {
   var vh        = $(window).outerHeight(),
       elt       = document.getElementById("error"),
       err       = getComputedStyle(elt).visibility,
       userAgent = navigator.userAgent.toLowerCase();

   $(".error").css("height", vh),

   userAgent.match(/iphone | android. + mobile/)
   // If it's viewed in mobile
   ? vh <= 500
      // If the screen height is smaller than 500px
      ? (
         $(".error").css("visibility", "visible"),
         $(".kyoko, .error--ie, .index, .page").css("display", "none")
         
      ) : vh > 500 && "visible" == err && (
      // If the screen height is bigger than 500px, and error content is shown
         $(".error").css("visibility", "hidden"),
         $(".kyoko, .error--ie, .index, .page").css("display", "block")

      ) : userAgent.match(/msie | trident/) && (
      // If it's viewed in IE
         $(".error").css("visibility", "visible"),
         $(".kyoko, .error--rotate, .index, .page").css("display", "none")
      );
}



//
// Content Layout
//

function Column() {

   // Get :root variables
   const root = getComputedStyle(document.querySelector(":root"));
   var   column = Number(root.getPropertyValue("--column").trim());

   if ( $(window).innerWidth() >= md ) {

      // Screen width is more than 768px
      
      $(".para .project-description p:first-of-type").addClass("middle-2"),
      $(".para .project-description p:last-of-type").addClass("last-2"),
      $("figcaption p").addClass("last-2"),

      console.log("Class added!")
   
   } else {

      // Screen width is less than 768px

      $(".para .project-description p:first-of-type").hasClass("middle-2")
      ? $(".para .project-description p:first-of-type").removeClass("middle-2")
      : "",

      $(".para .project-description p:last-of-type").hasClass("last-2")
      ? $(".para .project-description p:last-of-type").removeClass("last-2")
      : "",

      $("figcaption p").hasClass("last-2")
      ? $("figcaption p").removeClass("last-2")
      : "",

      console.log("Class removed!")
   }
}

function FullWidthImage() {
   var vw = $(window).innerWidth();
   if (vw <= md) {
      $("figure img:not(.small)").addClass("full")
   } else {
      $("figure img").hasClass("full")
         ? $("figure img").removeClass("full")
         : ""
   }   
};

function Height() {
   var vh = $(window).outerHeight();
   $(".dots").css("height", vh);
}

function Dot() {
   var oh = $(window).outerHeight(),
       ease = Power4.easeOut,
       d_a = { top: "-4%", left: "-2%" },
       d_b = { top: "10%", left: "75%" },
       d_c = { top: "52%", left: "20%" },
       d_d = { top: "17%", left: "87%" },
       deg = 1.7320508075689,
       sc =
         ((scrollElement = "scrollingElement" in document ? document.scrollingElement : document.documentElement),
            function () {
               return (scrollPoint = scrollElement.scrollTop), (flag = prePoint > scrollPoint), (prePoint = scrollPoint), flag;
            }),
       scrollElement,
       scrollPoint,
       prePoint,
       flag;

   $(window).on("scroll", function () {
      var st  = $(document).scrollTop(),
          per = 0.08 * st;
      TweenMax.to(".title--title", 1, { ease: ease, x: per + "px", y: per * deg * -1 + "px" }),
      TweenMax.to(".title--year", 1, { ease: ease, x: -1 * per + "px", y: per * deg + "px" }),
      TweenMax.to([".d-a", ".d-b", ".d-c", ".d-d"], 1, { ease: ease, y: -0.1 * st + "px" }),
         sc()
         ? st <= 0.2 * oh && (
            TweenMax.to(".d-a", 1, d_a), TweenMax.to(".d-b", 1, d_b), TweenMax.to(".d-c", 1, d_c), TweenMax.to(".d-d", 1, d_d)
         )
         : st >= 0.8 * oh && ( 
            TweenMax.to(".d-a", 2, { ease: ease, top: "16%", left: "12%" }),
            TweenMax.to(".d-b", 2, { ease: ease, top: "89%", left: "44%" }),
            TweenMax.to(".d-c", 2, { ease: ease, top: "82%", left: "60%" }),
            TweenMax.to(".d-d", 2, { ease: ease, top: "30%", left: "82%" })
         )
   });
}

function test() {
   const vw = $(window).innerWidth();
   const md = 768;
   if (vw >= md) {
      console.log("It's more than 768px");
   } else {
      console.log("It's less than 768px");
   }
}

// Actual Script
$(document).ready(function () {

   if (

      // See if there's an error

      (Error(),
         $(window).on("resize", function () {
            Error();
         }),
      "/" == location.pathname)

   ) {

      //
      // In Top Page
      //

      Height(),
      Dot(),

      $(window).on("resize", function () {
         Height();
         Dot();
      })

      var hash = location.hash;

      if (hash) {
         var p = $(hash).offset().top;
         scrollTo(0, 0),
            $("html, body")
               .delay(250)
               .animate({ scrollTop: p + "px" }, "slow"),
            history.replaceState(null, "", "/");
      } else {
         $("html, body").animate({ scrollTop: 0 }, "fast");
      }

   } else {

      //
      // In 2nd pages
      //

      $(".footer").css("position", "relative"),
      $("figcaption p").addClass("jp"),
      Column();
      FullWidthImage();

      var timer = false;
      $(window).resize(function() {
         if (timer !== false) {
            clearTimeout(timer);
         }
         timer = setTimeout(function() {
         // Action after resized
         test();
         Column();
         FullWidthImage();
         }, 200);
      });

   } // end else
});
