<html>
<?php include("../../components/navbar/mainNavbar.php") ?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <div class="container content has-text-centered" style="height: 95%; padding-top:2.5%;">
        <!-- New Post Card -->
        <form>
            <div class="card">
                <header class="card-header is-mobile">
                    <p class="card-header-title">
                        Create a Forum Post
                    </p>
                </header>

                <div class="card-content">
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" id="Title" name="Title" placeholder="Title">
                        </div>
                    </div>

                    <div class="field">
                        <textarea class="textarea" placeholder="e.g. Hello world"></textarea>
                    </div>

                    <button class="button is-small is-rounded is-success" style="padding-left: 10px;">
                        Post
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>