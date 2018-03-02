<?php

$HEADER = array(
    0 => array(
        "title" => $LANG["title_what_we_do"],
        "url" => "?"
    ),
    1 => array(
        "title" => $LANG["title_who_we_are"],
        "submenu" => array(
            0 => array(
                "title" => $LANG["title_who_sub_what"],
                "url" => "?page=who_what",
            ),
            1 => array(
                "title" => $LANG["title_who_sub_story"],
                "url" => "?page=who_story",
            ),
            2 => array(
                "title" => $LANG["title_who_sub_behind"],
                "url" => "?page=who_team",
            ),
            3 => array(
                "title" => $LANG["title_who_sub_assoc"],
                "url" => "?page=who_partner",
            ),
        ),
        "url" => "?"
    ),
    2 => array(
        "title" => $LANG["title_get_involved"],
        "url" => "?page=involved"
    )
);

?>
<header>
    <nav style="background-color: #f6f3e1 !important;" class="header navbar navbar-expand-md  fixed-top ">
        <a class="navbar-brand" href="?">
            <img id="main-logo" alt="Jivan" src="./assets/imgs/logo-jivan.png"/>
        </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <?php
            foreach ($HEADER as $ITEM) {
                if (isset($ITEM["submenu"])) {
            ?>
                    <li class="nav-item dropdown">
                        <a style="color: #97838f;"  class="nav-link dropdown-toggle" href="<?php echo $ITEM["link"]; ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $ITEM["title"]; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                            foreach ($ITEM["submenu"] as $SUBITEM) {
                                echo "<a class='dropdown-item' href='".$SUBITEM["url"]."'>".$SUBITEM["title"]."</a>";
                            }
                            ?>   
                        </div>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $ITEM["url"]; ?>">
                            <!--span class="sr-only">(current)</span-->
                            <?php echo $ITEM["title"]; ?>
                        </a>
                    </li>
                <?php
                }
            }
            ?>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Donate</button>
        </form>
    </div>
    </nav>
</header>
