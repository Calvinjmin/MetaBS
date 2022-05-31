<html>
<?php include("../../components/navbar/mainNavbar.php") ?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <div class="container content has-text-centered" style="height: 95%; padding-top:2.5%;">
        <button class="button is-small is-rounded is-danger">
            <a href="/pages/forum/forumLandingPage.php" style="color: inherit">Back to Forum</a>
        </button>

        <!-- New Post Card -->
        <form action="../../database/forumPost.php" method="post" style="padding-top: 2.5%;">
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
                            <input class="input" type="text" id="title" name="title" placeholder="Title">
                        </div>
                    </div>

                    <div class="field">
                        <textarea class="textarea" id="postText" name="postText" placeholder="e.g. Hello world"></textarea>
                    </div>

                    <button class="button is-small is-rounded is-success">
                        Post
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>