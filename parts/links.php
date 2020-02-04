<!-- <nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php
        if ( isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            case 'Admin':
              echo '<li class="nav-item active">
                      <a class="nav-link" href="./index.php?content=homepage">Overzicht<span class="sr-only">(current)</span></a>
                    </li>';
            break;

            case 'klant':
              echo '<li class="nav-item active">
                      <a class="nav-link" href="./index.php?content=homepage">Dashboard<span class="sr-only">(current)</span></a>
                    </li>';
            break;

          }
          echo '<li class="nav-item active">
                  <a class="nav-link" href="index.php?content=Lidmaatschappen">BMI</a>
                </li>';
          echo '<li class="nav-item active">
                  <a class="nav-link" href="./index.php?content=logout">Uitloggen</a>
                </li>';
} else {
          echo '<li class="nav-item active">
                  <a class="nav-link" href="index.php?content=Homepage">Home <span class="sr-only">(current)</span></a>
                </li>';
          echo '<li class="nav-item active">
                  <a class="nav-link" href="index.php?content=Registreren">Registreren</a>
                </li>';
          echo '<li class="nav-item active">
                  <a class="nav-link" href="./index.php?content=login">Inloggen</a>
                </li>';
          echo '<li class="nav-item active">
                  <a class="nav-link" href="index.php?content=Contact">Contact</a>
                </li>';
        }
      ?>


    </ul>
  </div>
</nav> -->

<?php
if (isset($_POST['uitloggen'])) {
    if (isset($_SESSION['id'])) {
        unset($_SESSION['id']);
        session_destroy();
        header("Location: index.php");
    }
}       
?>
<nav id="navbar1" class="navbar navbar-expand-lg bg-primary rounded 1">
        <a class="navbar-brand" href="index.php">ExerciseMe</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?content=Homepage">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?content=Contact">Contact</a>
            </li>
            <?php
            if (!isset($_SESSION['id'])) {
                echo '
                <li class="nav-item">
                    <a class="nav-link" href="index.php?content=Registreren">Registreren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php?content=login">Inloggen</a>
                </li>
            ';
            } else if (isset($_SESSION['id'])) {
                echo '                
                <li class="nav-item">
                    <a class="nav-link" href="logboek.php">Logboek</a>
                </li>
                <li class="nav-item">
                <form method="POST"><button name="uitloggen" id="uitloggen" class="nav-link" href="uitloggen.php">uitloggen</button></form>
                </li>';
            }
            // var_dump(isset($_SESSION['id']));
            ?>
        </ul>
    </nav>