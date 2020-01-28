<?php
require('./includes/connection_db.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>