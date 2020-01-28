<?php

?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<form class="container" action="./create.php" method="post">

<div class="form-group">

<label for="Naam">Naam</label>

<input type="text" class="form-control" id="Naam" aria-describedby="NaamHelp" placeholder="Naam" name="Name">

</div>

<div class="form-group">

<label for="Telefoonnummer">Telefoonnummer</label>

<input type="text" class="form-control" id="Telefoonnummer" aria-describedby="TelefoonnummerHelp" placeholder="Telefoonnummer" name="Phone Number">

</div>

<div class="form-group">

<label for="Email">Email</label>

<input type="text" class="form-control" id="Email" aria-describedby="EmailHelp" placeholder="Email" name="Email">

</div>

<div class="form-group">
  <label for="Cursus">Welke Cursus wenst u te boeken?</label>
  <select class="form-control" id="Cursus" aria-describedby="CursusHelp" placeholder="Cursus" name="Cursus">
    <option value= 'Yoga'> Yoga </option>
    <option value = 'Spinnen'> Spinnen</option>
    <option value = 'HIT'> HIT (high intesity Interval Training)</option>
    <option value = 'Zumba'> Zumba </option>
  </select>
</div> 




<button type="submit" class="btn btn-primary">Bevestigen</button>


</form>