var scrollPosition = $(window).scrollTop();

$(document).ready(function() {
  dropdown();
  itemDropdownHover();
});


function dropdown() {
  $("#dropdown").hover(function() {
    $(".dropdownItemManager").slideDown(200);
  }, function() {
    $(".dropdownItemManager").stop().slideUp(200);
  })
}

function itemDropdownHover() {
  $("#itemDropdown1").hover(function() {
    $("#contentDropdown1").stop(false, true).fadeIn();
    $("#itemDropdown1").addClass("dropdownItemhover");
    $("#contentDropdown2").hide();
    $("#itemDropdown2").removeClass("dropdownItemhover");
    $("#contentDropdown3").hide();
    $("#itemDropdown3").removeClass("dropdownItemhover");
  })
  $("#itemDropdown2").hover(function() {
    $("#contentDropdown2").stop(false, true).fadeIn();
    $("#itemDropdown2").addClass("dropdownItemhover");
    $("#contentDropdown1").hide();
    $("#itemDropdown1").removeClass("dropdownItemhover");
    $("#contentDropdown3").hide();
    $("#itemDropdown3").removeClass("dropdownItemhover");
  })
  $("#itemDropdown3").hover(function() {
    $("#contentDropdown3").stop(false, true).fadeIn();
    $("#itemDropdown3").addClass("dropdownItemhover");
    $("#contentDropdown1").hide();
    $("#itemDropdown1").removeClass("dropdownItemhover");
    $("#contentDropdown2").hide();
    $("#itemDropdown2").removeClass("dropdownItemhover");
  })

  $(".dropdownImg, #dropDownText1").hover(function() {
    $("#dropDownText1").stop(false, true).animate({
      'opacity': 1,
    }, 500);
    $("#dropdownImg1").stop(false, true).css({
      "filter": "blur(1px)"
    });
    $("#dropDownImgOverlay1").stop(false, true).animate({
      'opacity': .4
    }, 500);
  }, function() {
    $("#dropDownText1, #dropDownImgOverlay1").stop(false, true).animate({
      'opacity': 0
    }, 500);
    $("#dropdownImg1").stop(false, true).css({
      "filter": "blur(0px)"
    });
  })

  $(".dropdownImg, #dropDownText2").hover(function() {
    $("#dropDownText2").stop(false, true).animate({
      'opacity': 1,
    }, 500);
    $("#dropdownImg2").stop(false, true).css({
      "filter": "blur(1px)"
    });
    $("#dropDownImgOverlay2").stop(false, true).animate({
      'opacity': .4
    }, 500);
  }, function() {
    $("#dropDownText2, #dropDownImgOverlay2").stop(false, true).animate({
      'opacity': 0
    }, 500);
    $("#dropdownImg2").stop(false, true).css({
      "filter": "blur(0px)"
    });
  })

  $(".dropdownImg, #dropDownText3").hover(function() {
    $("#dropDownText3").stop(false, true).animate({
      'opacity': 1,
    }, 500);
    $("#dropdownImg3").stop(false, true).css({
      "filter": "blur(1px)"
    });
    $("#dropDownImgOverlay3").stop(false, true).animate({
      'opacity': .4
    }, 500);
  }, function() {
    $("#dropDownText3, #dropDownImgOverlay3").stop(false, true).animate({
      'opacity': 0
    }, 500);
    $("#dropdownImg3").stop(false, true).css({
      "filter": "blur(0px)"
    });
  })
}
