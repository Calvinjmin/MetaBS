<html>
<?php include("../../components/navbar/mainNavbar.php") ?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-3-widescreen">

                    <!-- Login Form -->
                    <form action="../endpoints/signUpPost.php" method="post" class="box">
                        <div class="field">
                            <label for="" class="label">First Name</label>
                            <div class="control">
                                <input type="text" id="first_name" name="first_name" placeholder="John" class="input" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">Last Name</label>
                            <div class="control">
                                <input type="text" id="last_name" name="last_name" placeholder="Doe" class="input" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">Username</label>
                            <div class="control">
                                <input type="text" id="username" name="username" placeholder="Username" class="input" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">Password</label>
                            <div class="control">
                                <input type="password" id="password" name="password" placeholder="*******" class="input" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">Email</label>
                            <div class="control">
                                <input type="email" id="email" name="email" placeholder="e.g @gmail.com" class="input" required>
                            </div>
                        </div>

                        <div class="field">
                            <button class="button is-danger">
                                Sign Up
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        </section>
</body>

</html>