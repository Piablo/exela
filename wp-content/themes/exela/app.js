$(".hamburger-container-exela-header").on("click", function() {
    if ($(".mobile-menu-exela-header").hasClass("exela-mobile-hide")) {
      $(".mobile-menu-exela-header").removeClass("exela-mobile-hide");
      $(".mobile-menu-exela-header").addClass("exela-mobile-show");
    } else {
      $(".mobile-menu-exela-header").addClass("exela-mobile-hide");
      $(".mobile-menu-exela-header").removeClass("exela-mobile-show");
    }
  });