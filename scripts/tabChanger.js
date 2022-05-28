function switchToGemGrab() {
  removeActive();
  hideAll();
  $("#gemGrabTab").addClass("is-active");
  $("#gemGrabContent").removeClass("is-hidden");
}

function switchToKnockout() {
  removeActive();
  hideAll();
  $("#knockoutTab").addClass("is-active");
  $("#knockoutContent").removeClass("is-hidden");
}

function switchToBrawlBall() {
  removeActive();
  hideAll();
  $("#brawlBallTab").addClass("is-active");
  $("#brawlBallContent").removeClass("is-hidden");
}

function switchToBounty() {
  removeActive();
  hideAll();
  $("#bountyTab").addClass("is-active");
  $("#bountyContent").removeClass("is-hidden");
}

function switchToHeist() {
  removeActive();
  hideAll();
  $("#heistTab").addClass("is-active");
  $("#heistContent").removeClass("is-hidden");
}

function switchToSoloShow() {
  removeActive();
  hideAll();
  $("#soloShowTab").addClass("is-active");
  $("#soloShowContent").removeClass("is-hidden");
}

function switchToDuoShow() {
  removeActive();
  hideAll();
  $("#duoShowTab").addClass("is-active");
  $("#duoShowContent").removeClass("is-hidden");
}

function removeActive() {
  $("li").each(function () {
    $(this).removeClass("is-active");
  });
}

function hideAll() {
  $("#gemGrabContent").addClass("is-hidden");
  $("#knockoutContent").addClass("is-hidden");
  $("#brawlBallContent").addClass("is-hidden");
  $("#bountyContent").addClass("is-hidden");
  $("#heistContent").addClass("is-hidden");
  $("#soloShowContent").addClass("is-hidden");
  $("#duoShowContent").addClass("is-hidden");
}
