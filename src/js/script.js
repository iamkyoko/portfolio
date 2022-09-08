"use strict";
$(document).ready(function () {
   function Error() {
      var vh = $(window).outerHeight(),
         elt = document.getElementById("error"),
         css,
         err = getComputedStyle(elt).visibility,
         userAgent = navigator.userAgent.toLowerCase();
      $(".error").css("height", vh),
         userAgent.match(/iphone | android. + mobile/)
            ? vh <= 500
               ? ($(".error").css("visibility", "visible"), $(".kyoko, .error--ie, .home, .page").css("display", "none"))
               : vh > 500 && "visible" == err && ($(".error").css("visibility", "hidden"), $(".kyoko, .error--ie, .home, .page").css("display", "block"))
            : userAgent.match(/msie | trident/) && ($(".error").css("visibility", "visible"), $(".kyoko, .error--rotate, .home, .page").css("display", "none"));
   }
   let path;
   if (
      (Error(),
         $(window).on("resize", function () {
            Error();
         }),
         "/" == location.pathname)
   ) {
      function Height() {
         var vh = $(window).outerHeight();
         $(".dots").css("height", vh), $(".grid").css("min-height", vh);
      }
      function Move() {
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
            var st = $(document).scrollTop(),
               per = 0.08 * st;
            TweenMax.to(".title--title", 1, { ease: ease, x: per + "px", y: per * deg * -1 + "px" }),
               TweenMax.to(".title--year", 1, { ease: ease, x: -1 * per + "px", y: per * deg + "px" }),
               TweenMax.to([".d-a", ".d-b", ".d-c", ".d-d"], 1, { ease: ease, y: -0.1 * st + "px" }),
               sc()
                  ? st <= 0.2 * oh && (TweenMax.to(".d-a", 1, d_a), TweenMax.to(".d-b", 1, d_b), TweenMax.to(".d-c", 1, d_c), TweenMax.to(".d-d", 1, d_d))
                  : st >= 0.8 * oh &&
                  (TweenMax.to(".d-a", 2, { ease: ease, top: "16%", left: "12%" }),
                     TweenMax.to(".d-b", 2, { ease: ease, top: "89%", left: "44%" }),
                     TweenMax.to(".d-c", 2, { ease: ease, top: "82%", left: "60%" }),
                     TweenMax.to(".d-d", 2, { ease: ease, top: "30%", left: "82%" }));
         });
      }
      Height(),
         $(window).on("resize", function () {
            Height();
         }),
         $(window).on("resize", function () {
            Move();
         }),
         Move();
      var hash = location.hash;
      if (hash) {
         var target,
            p = $(hash).offset().top;
         scrollTo(0, 0),
            $("html, body")
               .delay(250)
               .animate({ scrollTop: p + "px" }, "slow"),
            history.replaceState(null, "", "/");
      } else $("html, body").animate({ scrollTop: 0 }, "fast");
   } else {
      function Column() {
         const root = getComputedStyle(document.querySelector(":root"));
         var column = Number(root.getPropertyValue("--column").trim()),
            end = column + 1,
            str = 1,
            vw;
         $(window).innerWidth() >= 768 ? ($(".c-1").css("grid-column", "1 / " + end), $(".c-2").css("grid-column", "span " + column / 2)) : $(".c-1, .c-2").css("grid-column", "");
      }
      $(".kyoko").css("display", "none"),
         $(".footer").css("position", "relative"),
         Column(),
         $(window).on("resize", function () {
            Column();
         });
   }
});