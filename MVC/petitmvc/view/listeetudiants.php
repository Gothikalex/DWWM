<html>
<head>
</head>
<body>
<h1> Voici la liste des étudiants</h1>

<?php
foreach($etudiants as $et) { ?>
<h1><?= $et['nom'] ?> <?= $et['prenom'] ?></h1>
<?php } ?>

</body>