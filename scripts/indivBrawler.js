// Conducts Ajax POST Request on Brawler Name Click
function indivBrawler(thisObj) {
  $(document).ready(function () {
    // Hidden value for Brawler ID
    var brawlerName = thisObj.innerText;
    var brawlerID = document.getElementById(brawlerName).value;

    var ajaxurl = "/endpoints/brawlerInfoPost.php";
    data = {
      brawlerName: brawlerName,
      brawlerID: brawlerID,
    };

    // POST Request -> redirect to individual brawler's page
    $.post(ajaxurl, data, function (response) {
      if (response) {
        window.location.href = "/pages/indivBrawlerPage.php";
      }
    });
  });
}
