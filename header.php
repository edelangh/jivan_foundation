<?php

$HEADER = array(
    0 => array(
      "title" => $LANG["title_what_we_do"],
      "url" => "?page=gi_do"
    ),
    1 => array(
        "title" => $LANG["title_who_we_are"],
        "submenu" => array(
            1 => array(
                "title" => $LANG["title_who_sub_story"],
                "url" => "?page=who_story",
            ),
            2 => array(
                "title" => $LANG["title_who_sub_behind"],
                "url" => "?page=who_team",
            ),
        ),
        "url" => "?"
    ),
    2 => array(
        "title" => $LANG["title_get_involved"],
        "url" => "?page=gi_land"
    ),
    3 => array(
        "title" => $LANG["title_get_touch"],
        "url" => "?page=gi_touch"
    )
);
?>
<header>
  <nav style="background-color: #f6f3e1 !important;" class="header navbar navbar-expand-md  fixed-top ">
    <a class="navbar-brand logo" href="?">
      <img id="main-logo" class="logo" alt="Jivan" src="./assets/imgs/logo-jivan.png"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
        <img class="d-none d-md-block logo" alt="Jivan" src="./assets/imgs/logo-jivan.png"/>
      </span>
    </button>
    <div class="d-md-none logo-mob">
        <img alt="Jivan" src="./assets/imgs/logo-jivan.png"/>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto" style="width: 100%">
        <li class="nav-item d-md-none">
          <a class="nav-link" href="?page=home">
            HOME
          </a>
        </li>
<?php
          foreach ($HEADER as $ITEM) {
              if (isset($ITEM["submenu"])) {
          ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-hover="dropdown" href="<?php echo $ITEM["link"]; ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a style="color: #97838f;"  class="nav-link dropdown-toggle" data-hover="dropdown" href="<?php echo $ITEM["link"]; ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo strtoupper($LL);?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="?lang=en">EN</a>
            <a class="dropdown-item" href="?lang=fr">FR</a>
          </div>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0" onsubmit="window.location.href='?page=gi_donate'; return false;">
        <button id="head-donate" class="btn btn-donate btn-outline-success my-2 my-sm-0" type="submit">
        <?php echo $LANG["donate"]; ?>
        </button>
      </form>
    </div>
  </nav>
</header>
