
<!doctype html>
<html lang="en">
<head>
<?php 
require('./includes/autoloader.php');

?>
  <title>Registreren</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">


</head>

<body>


  <!-- <div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="row">
  <div class="col-12">
    <h1>Registratie</h1>
  </div>
</div>
<div class="row">
  <div class="col-6">

    <form action="./register_script.php" method="post">
      <div class="form-group">
        <label for="exampleInputname">Email</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
          placeholder="Voer uw e-mailadres in..." name="email">
        <small id="emailHelp" class="form-text text-muted">Wij zullen nooit uw e-mailadres delen met anderen.</small>
      </div>
      <button type="submit" class="btn btn-primary">Registreren!</button>
    </form>
  </div>
  <div class="col-6">
    
    
  </div>
</div>
    </div>
  </div>
</div> -->



  <section id="cover">
    <div id="cover-caption">
      <div id="container" class="container">
      <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registreren'])) {
  if (!empty($_POST['email']) && !empty($_POST['wachtwoord']) && !empty($_POST['bevestigwachtwoord'])) {
     $query = $db->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
     $query->execute(array(
      ':email' => $_POST['email'],
      ':password' => password_hash($_POST['wachtwoord'], PASSWORD_BCRYPT)
     ));
     echo '<div class="alert alert-success" role="alert">Uw kunt nu inloggen</div>';
  }else {
    echo '<div class="alert alert-warning" role="alert">Niet alle velden zijn ingevuld!</div>';
  }
}
?>
        <div class="row">
          <div class="col-sm-6 offset-sm-3 text-center">
            <h1 class="display-4">Registreren</h1>
            <div class="info-form">
              <form method="POST">
                <div class="form-group">
                  <label for="exampleInputname">Email</label>
                  <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
                    placeholder="Voer uw e-mailadres in..." name="email">
                  <small id="emailHelp" class="form-text text-muted">Wij zullen nooit uw e-mailadres delen met
                    anderen.</small>
                    <label for="Wachtwoord">Wachtwoord</label>
                  <input name="wachtwoord" type="password" class="form-control" id="InputEmail" aria-describedby="emailHelp"
                    placeholder="Voer uw wachtwoord in..." name="wachtwoord">
                  <small id="emailHelp" class="form-text text-muted">Wij zullen nooit uw wachtwoord delen met
                    anderen.</small>
                    <label for="exampleInputname">Bevestig Wachtwoord</label>
                  <input name="bevestigwachtwoord" type="password" class="form-control" id="InputEmail" aria-describedby="emailHelp"
                    placeholder="Voer uw wachtwoord in..." name="bevestigwachtwoord">
                </div>
                <button name="registreren" type="submit" class="btn btn-primary" id="savebutton">Registreren!</button>
              </form>
            </div>
            <br>

            <a href="index.php" class="btn btn-outline-secondary btn-sm" role="button" id="knop">
              Ga terug
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>



</html>

</body>
</html>