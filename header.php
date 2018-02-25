<?php

$HEADER = array(
    0 => array(
        "title" => $LANG["title_what_we_do"],
        "url" => "#"
    ),
    1 => array(
        "title" => $LANG["title_who_we_are"],
        "url" => "#"
    ),
    2 => array(
        "title" => $LANG["title_get_involved"],
        "url" => "#"
    )
);

?>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            <img id="main-logo" alt="Jivan" src="./assets/imgs/logo-jivan.png"/>
        </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <?php
            foreach ($HEADER as $ITEM) {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <!--span class="sr-only">(current)</span-->
                        <?php echo $ITEM["title"]; ?>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Donate</button>
        </form>
    </div>
    </nav>
</header>
