<header class="navbar-fixed">

  <div class="navigation-wrap">

    <div class="logo">
      <a href="index.php"><img src="img/logostenatorp.svg" alt="Stenatorps logotype"></a>
    </div>

    <div class="menu-toggle">
      <img src="img/menu-toggle.svg" alt="Knapp för att öppna menyn">
    </div>

    <nav class="medium-nav">
      <a class="<?php echo ($page == "forsaljning" ? "active" : "")?>" href="forsaljning.php">Försäljning</a>
      <a class="<?php echo ($page == "sjalvplock" ? "active" : "")?>" href="sjalvplock.php">Självplock</a>
      <a class="<?php echo ($page == "kontakt" ? "active" : "")?>" href="kontakt.php">Kontakt / Hitta hit</a>
      <a class="<?php echo ($page == "recept" ? "active" : "")?>" href="recept.php">Recept</a>
    </nav>

  </div>

  <div class="mobil-nav">
      <div class="hr-small-nav"></div>
      <a href="forsaljning.php"><li class="<?php echo ($page == "forsaljning" ? "active" : "")?>">Försäljning</li></a>
      <div class="hr-small-nav"></div>
      <a href="sjalvplock.php"><li class="<?php echo ($page == "sjalvplock" ? "active" : "")?>">Självplock</li></a>
      <div class="hr-small-nav"></div>
      <a href="kontakt.php"><li class="<?php echo ($page == "kontakt" ? "active" : "")?>">Kontakt / Hitta hit</li></a>
      <div class="hr-small-nav"></div>
      <a href="recept.php"><li class="<?php echo ($page == "recept" ? "active" : "")?>">Recept</li></a>
      <div class="hr-small-nav-last"></div>
  </div>

</header>
