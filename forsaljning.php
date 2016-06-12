<!DOCTYPE html>
<?php include "includes/intro-comment.php" ?>
<html lang="sv">

<head>
  <title>Försäljning | Stenatorp.se</title>
  <meta name="description" content="Välkommen att handla dagsfärska jordgubbar i vår gårdsbutik.">
  <!-- include all genereal HEAD-stuff -->
  <?php include "includes/head.php" ?>
</head>

<body>
  <?php $page = "forsaljning"; ?>
  <?php
    include "includes/nav.php"
  ?>

  <div class="wrapper">

    <?php include "includes/pages/include-forsaljning.php" ?>

    <?php include "includes/footer.php" ?>

  </div>

  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/min/functions-min.js"></script>

</body>
</html>
