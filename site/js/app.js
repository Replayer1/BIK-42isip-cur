$(document).ready(function () {
  $(".header__burger").click(function (event) {
    $(".header__burger,.header__menu").toggleClass("active");
    $("body").toggleClass("lock");
  });

  $(".star").click(function (event) {
    $(this).toggleClass("bi-star-fill");
    $(this).toggleClass("bi-star");
  });
});

$(document).ready(function () {
  $(".order").click(function (event) {
    $(".display--order").toggleClass("act--order");
    $("#body-lock").toggleClass("order-body");
    $("body").toggleClass("lock");
  });
  $("#body-lock").click(function (event) {
    $(".display--order").toggleClass("act--order");
    $("#body-lock").toggleClass("order-body");
    $("body").toggleClass("lock");
  });
});

$(document).ready(function () {
  function loadMore(button, element) {
    $(`${button}`).on("click", function (e) {
      e.preventDefault();
      $(`${element}`).slice(0, 3).slideDown().addClass("opacity");
      if ($(`${element}`).length == 0) {
        $(`${button}`).text("No Content").addClass("noContent");
      }
    });
  }

  loadMore("#loadMore", ".load__more-item-1:hidden");
  loadMore("#loadMore-2", ".load__more-item-2:hidden");
  loadMore("#loadMore-3", ".load__more-item-3:hidden");
});

$(document).ready(function () {
  function loadMoreTwo(button, element) {
    $(`${button}`).on("click", function (e) {
      e.preventDefault();
      $(`${element}`).slice(0, 2).slideDown().addClass("opacity");
      if ($(`${element}`).length == 0) {
        $(`${button}`).text("No Content").addClass("noContent");
      }
    });
  }

  loadMoreTwo("#loadMore-4", ".load__more-item-4:hidden");
});

console.log(1);

// $(".produckt__box").slice(0, 3).show();
// $("#loadMore").on("click", function(e){
//    e.preventDefault();
//    $(".produckt__box:hidden").slice(0, 3).slideDown().addClass('opacity');
//    if($(".produckt__box:hidden").length == 0) {
//       $("#loadMore").text("No Content").addClass("noContent");
//    }
// });
// });

// $(document).ready(function() {
// $(".load__more-item-2").slice(0, 3).show();
// $("#loadMore-2").on("click", function(e){
//    e.preventDefault();
//    $(".load__more-item-2:hidden").slice(0, 3).slideDown().addClass('opacity');
//    if($(".load__more-item-2:hidden").length == 0) {
//       $("#loadMore-2").text("No Content").addClass("noContent");
//    }
// });
