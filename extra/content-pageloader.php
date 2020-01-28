<section class="content">
  <?php
    if ( isset($_GET["content"])) {
      include("./pages/" . $_GET["content"]. ".php");
    } else {
      include("./pages/Homepage.php");
    }
    ?>
</section>