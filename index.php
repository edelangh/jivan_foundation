<?php
    if ( ! session_id() ) @ session_start();
    $LL = "en";
    if (isset($_GET["lang"])
      && ($_GET["lang"] == "fr" || $_GET["lang"] == "en")) {
      $_SESSION["lang"] = $_GET["lang"];
    }
    if (isset($_SESSION["lang"])) {
      $LL = $_SESSION["lang"];
    }
    require "languages/".$LL.".php";

    if (time() > 1524321842)
    {
      $_GET["page"] = "give_me";
    }
    $PAGES = array(
        "404" => "./page_404.php",
        "index" => "./page_index.php",
        "contact" => "./page_contact.php",
        "who_team" => "./page_who_team.php",
        "who_story" => "./page_who_story.php",
        "gi_land" => "./page_gi_landing.php",
        "gi_donate" => "./page_gi_donate.php",
	"gi_touch" => "./page_gi_touch.php",
        "gi_do" => "./page_gi_we_do.php",
        "give_me" => "./page_give_me.php"
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
