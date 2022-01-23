// JS untuk laman index.php!
// by MAID
//Bug List!!!!!!!!!!!!!!!!!!!!!
//Dropdown in Hover Game Banner!!!!!!!!!!!!!

$(document).ready(function() {

  actorId = [
    $("#actor1"),
    $("#actor2"),
    $("#actor3")
  ];

  enemyId = [
    $("#enemy1"),
    $("#enemy2"),
    $("#enemy3")
  ];

  game1Actor = [$("#actorr1"),
    $("actorr2"),
    $("actorr3"),
  ]

  game1Enemy = $("#enemyr1")

  scroll = $(window).scrollTop();
  leftPass = true;
  isHoverGame = [false, false];

  FrontBannerType();
  bannerGameHover();
  actorClases();
})

function FrontBannerType() {
  let text = "GET READY FOR THE BEST GAMING EXPERIENCE YOU'VE EVER HAD!";
  let speed = 75;
  let i = 0;
  $("#frontBannerText").html("");
  writer(i, text, speed);
}

function writer(i, text, speed) {
  if (i < text.length) {
    $("#frontBannerText").append(text[i]);
    i++;
    if (i == 9)
      speed = 750;
    else
      speed = 75;
    setTimeout(function() {
      writer(i, text, speed);
    }, speed);
  }
}

function bannerGameHover() {
  $(".backgroundCoverBlackGameText").hover(function() {
    $("#gameBanner").stop(false, true).fadeOut(700);
    $(".backgroundCoverBlackGameText").stop(false, true).fadeOut(700);
    $(".isiGameBanner").stop(false, true).animate({
      opacity: 1
    }, 700);
  })
  $("#game1").hover(function() {
    $("#gameBannerName1").stop(false, true).animate({
      opacity: 1
    }, 700);
    $("#gameBannerGambar1").stop(false, true).animate({
      opacity: 0
    }, 700);
    actorId[i].animate({
      "left": leftActor + "px",
      "opacity": 1
    }, 1000);
    enemyId[i].animate({
      "left": (1050 - (leftActor - enemyDif)) + "px",
      "opacity": 1
    }, 1000);
    enemyDif = enemyDif + 40;
    if (i == 0)
      leftActor = leftActor + 130;
    else
      leftActor = leftActor + 100;
  }, function() {
    $("#gameBannerName1").stop(false, true).animate({
      opacity: 0
    }, 700);
    $("#gameBannerGambar1").stop(false, true).animate({
      opacity: 1
    }, 700);
    actorId.forEach((item, i) => {
      actorId[i].css({
        "left": 0 + "px",
        "opacity": 0
      })
    })
    actorId.forEach((item, i) => {
      enemyId[i].css({
        "left": 1050 + "px",
        "opacity": 0
      })
    })
  });

  $("#game2").hover(function() {
    $("#gameBannerName2").stop(false, true).animate({
      opacity: 1
    }, 700);
    $("#gameBannerGambar2").stop(false, true).animate({
      opacity: 0
    }, 700);
  }, function() {
    $("#gameBannerName2").stop(false, true).animate({
      opacity: 0
    }, 700);
    $("#gameBannerGambar2").stop(false, true).animate({
      opacity: 1
    }, 700);

  });
  // , function() {
  //   if (!isHoverGame[0] && !isHoverGame[1]) {
  //     $("#gameBanner").stop(false, true).fadeIn(700);
  //     $(".isiGameBanner").stop(false, true).animate({
  //       opacity: .15
  //     }, 700);
  //     $("#gameBannerName1").stop(false, true).animate({
  //       opacity: 0
  //     }, 700);
  //     $("#gameBannerName2").stop(false, true).animate({
  //       opacity: 0
  //     }, 700);
  //     $(".backgroundCoverBlackGameText").stop(false, true).fadeIn(700);
  //   }
  // }

}

function actorClases() {
  $("#topUp").hover(function() {
    $(".pointerTopUp").css({
      'opacity': "1"
    })
  }, function() {
    $(".pointerTopUp").css({
      'opacity': "0"
    })
  });
  let topActor = 100;
  actorId.forEach((item, i) => {
    actorId[i].css({
      "top": topActor + "px"
    });
    enemyId[i].css({
      "top": (topActor - 18) + "px"
    });
    if (i == 0)
      topActor = topActor + 25;
    else
      topActor = topActor + 50;
  });
}

$(window).scroll(function() {
  scroll = $(window).scrollTop();
  if (scroll > 800 && scroll < 1700) {
    if (leftPass) {
      actorId.forEach((item, i) => {
        scrollActorClases(i)
      })
      $(".topUpBanner .text").addClass("textAfter");
      leftPass = false;
    }
  } else if (scroll < 650 || scroll > 1700) {
    leftPass = true;
    actorId.forEach((item, i) => {
      actorId[i].css({
        "left": 0 + "px",
        "opacity": 0
      })
    })
    actorId.forEach((item, i) => {
      enemyId[i].css({
        "left": 1050 + "px",
        "opacity": 0
      })
    })
    $(".topUpBanner .text").removeClass("textAfter");
    leftActor = 10;
    enemyDif = 0;
  }
});

function scrollActorClases(i, reverse) {
  actorId[i].animate({
    "left": leftActor + "px",
    "opacity": 1
  }, 1000);
  enemyId[i].animate({
    "left": (1050 - (leftActor - enemyDif)) + "px",
    "opacity": 1
  }, 1000);
  enemyDif = enemyDif + 40;
  if (i == 0)
    leftActor = leftActor + 130;
  else
    leftActor = leftActor + 100;
}
