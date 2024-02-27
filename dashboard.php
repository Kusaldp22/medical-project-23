<?php
$title = "Dashboard";
$web_title = "Dashboard";
include_once "site-parts/header.php";
$json_path = "config/credentials.json";
include("db.php");
?>
<?php
require "site-parts/getters.php";
// get_jambo("https://assets-global.website-files.com/5f4bb8e34bc82700bda2f385/60592b7ebe1b7639868b5190_learning-web-design-sites.jpg", "Welcome, ".$_SESSION["user"]["first_name"]." ". $_SESSION["user"]["last_name"] . "!", "This is the " .$_SESSION["role"]. " portal of the College Of Alexandriana");
?>

<!-- STUDENT PART -->

<?php 
if ($_SESSION["role"] == "student") {
?>
<h4 class="mb-4 mt-5">Registered Classes</h4>
<div class="container">
    <?php
    $json_path = "config/credentials.json";
    include("db.php");
    
    ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Card 1 -->
        <?php 
        foreach ($_SESSION["user"]["registered"] as $cls) {
            $cls_dta = $_SESSION["classes"][$cls];
            $teacher = $_SESSION["teachers"][$cls_dta["teacher"]];
            if ($cls_dta["status"] == "active") {
                ?>

        <div class="col">
            <div class="card card-animation">
                <div class="card-body">
                    <h5 class="card-title"><?=$cls_dta["subject"]?> <?=$cls_dta["cls_type"]?> (<?=$cls_dta["year"]?>)
                    </h5>
                    <p class="card-text mb-0" style="color: rgba(143, 0, 219);"><?=$teacher["first_name"]?>
                        <?=$teacher["last_name"]?></p>
                    <p class="mb-0">Every <?=$cls_dta["day"]?> from <?=$cls_dta["start"]?> to <?=$cls_dta["end"]?> @
                        Hall
                        <?=$cls_dta["hall"]?></p>
                    </p>
                    <p class="mt-0">
                        <span class="badge text-bg-primary mt-0">Grade <?=$cls_dta["grade"]?></span>
                        <span class="badge text-bg-primary mt-0"><?=$cls_dta["medium"]?> Medium</span>
                        <span class="badge text-bg-warning mt-0"><?=$cls_dta["fee"]?> LKR</span>
                    </p>
                    <div class="mt-4" style="width: 100%; display: flex; justify-content: end;">
                        <a class="btn btn-sm btn-success" style="width: 100%;" target="_blank"
                            href="<?=$cls_dta["group_link"]?>">Join
                            Class Group</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>

    </div>
</div>
<br>
<?php
}
// TEACHER PART
else if ($_SESSION["role"] == "teacher"){
?>

<h4 class="mb-4 mt-5">Your classes</h4>
<div class="container">
    <?php
    $json_path = "config/credentials.json";
    include("db.php");
    
    ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Card 1 -->
        <?php 
        foreach ($_SESSION["classes"] as $cls) {
            if ($cls["teacher"] == $_SESSION["user"]["teacher_code"]) {
                ?>

        <div class="col">
            <div class="card card-animation">
                <div class="card-body">
                    <h5 class="card-title"><?=$cls["subject"]?> <?=$cls["cls_type"]?> (<?=$cls["year"]?>)
                    </h5>
                    <p class="card-text mb-0" style="color: rgba(143, 0, 219);"><?=$_SESSION["user"]["first_name"]?>
                        <?=$_SESSION["user"]["last_name"]?></p>
                    <p class="mb-0">Every <?=$cls["day"]?> from <?=$cls["start"]?> to <?=$cls["end"]?> @
                        Hall
                        <?=$cls["hall"]?></p>
                    </p>
                    <p class="mt-0">
                        <span class="badge text-bg-primary mt-0">Grade <?=$cls["grade"]?></span>
                        <span class="badge text-bg-primary mt-0"><?=$cls["medium"]?> Medium</span>
                        <span class="badge text-bg-warning mt-0"><?=$cls["fee"]?> LKR</span>
                    </p>
                    <div class="mt-4" style="width: 100%; display: flex; justify-content: center;">
                        <a class="btn btn-sm btn-success" style="width: 100%;" target="_blank"
                            href="<?=$cls["group_link"]?>">Join
                            Class Group</a>
                    </div>
                </div>
            </div>
        </div>



        <?php
            }
        }
        ?>

    </div>
</div>
<br>



<?php  
}
?>
<?php
include_once "site-parts/footer_part.php";
include_once "site-parts/footer.php";
?>