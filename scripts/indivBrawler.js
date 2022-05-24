function indivBrawler(thisObj) {
    $(document).ready(function() {
        var brawlerName = thisObj.innerText;
        var ajaxurl = "/endpoints/brawlerInfoPost.php";
        data = {
            'brawlerName': brawlerName
        };
        $.post(ajaxurl, data, function(response) {
            window.location.href = '/pages/indivBrawler.php';
        });
    });
}