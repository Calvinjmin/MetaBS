// Conducts Ajax POST Request on Brawler Name Click
function indivBrawler(thisObj) {
    $(document).ready(function() {
        
        // a Tag's Value
        var brawlerName = thisObj.innerText;
        var ajaxurl = "/endpoints/brawlerInfoPost.php";
        data = {
            'brawlerName': brawlerName
        };

        // POST Request -> redirect to individual brawler's page
        $.post(ajaxurl, data, function(response) {
            window.location.href = '/pages/indivBrawler.php';
        });
    });
}