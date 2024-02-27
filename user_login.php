<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Log In</title>
    <link rel="stylesheet" href="./css/forms.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <section class="user_info">

        <div class="form_header">

            <h2 class="text-center mt-3">User LogIn</h2>
            <div class="alert alert-primary mb-4 mt-3 inside-content" role="alert">
                <b>Instructions</b>
                <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique voluptatibus
                    perspiciatis
                    consequuntur
                    beatae quis ratione aliquam praesentium dolore tempore? Cumque mollitia voluptates aliquid quidem
                    fugit?
                </p>
            </div>
            <?php
if (isset($_GET["err"])) {
    ?>
            <div class="alert alert-danger alert-dismissible fade show login-content mb-4" role="alert">
                <p style="text-align: center; margin: 0;"><strong>Warning! &nbsp;</strong><?=$_GET["err"]?></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
    }
    ?>
            <?php
if (isset($_GET["ok"])) {
    ?>
            <div class="alert alert-success alert-dismissible fade show login-content mb-4" role="alert">
                <p style="text-align: center; margin: 0;"><strong>Looking Good! &nbsp;</strong><?=$_GET["ok"]?></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
    }
    ?>
        </div>
    </section>
    <section class="login_info">
        <?php 
        include_once "site_parts/getters.php";
        ?>
        <div class="login-content card-animation">
            <form validate method="post" action="./includes/user_login.inc.php">
                <div class="from_div_content row g-3 needs-validation">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label"><?=required_star()?> User ID</label>
                        <input type="text" class="form-control form-control-sm" id="validationCustom01" required
                            name="user_id" />
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label"><?=required_star() ?> Password</label>
                        <input type="password" class="form-control form-control-sm" id="validationCustom01" required
                            name="password" />
                    </div>

                    <div class="from_div_content row g-3 needs-validation mt-4 mb-2">
                        <div class="col-12">
                            <button class="btn btn-primary form-control" style="width: 100%;" type="submit"
                                name="user_submission">
                                Log In
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>