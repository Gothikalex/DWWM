<?php
session_start();
print_r($_SESSION);
?>
<h1>vous êtes toujours là <?= $_SESSION['nom']; ?> <?= $_SESSION['prenom']; ?>?</h1>