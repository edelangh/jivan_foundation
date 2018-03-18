<?php
    require "languages/en.php";

    $PAGES = array(
        "404" => "./page_404.php",
        "index" => "./page_index.php",
        "contact" => "./page_contact.php",
        "who_team" => "./page_who_team.php",
        "who_story" => "./page_who_story.php",
        "gi_land" => "./page_gi_landing.php",
        "gi_donate" => "./page_gi_donate.php",
        "gi_ambassador" => "./page_gi_ambassador.php",
        "gi_work" => "./page_gi_work.php",
        "gi_touch" => "./page_gi_touch.php",
    )
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include './head.php';
        ?>
    </head>
    <body>
        <?php
            include './header.php';
        ?>
            <!--   -->
        <?php
            if (isset($_GET["page"]) && isset($PAGES[$_GET["page"]]))
                    require $PAGES[$_GET["page"]];
            else
                    require $PAGES["index"];
            ?>
            <!--   -->
            <?php
                include './foot.php';
            ?>
        </div>
        <?php
            include './footer.php';
        ?>
    </body>
</html>
