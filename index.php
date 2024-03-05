<?php

@include_once('src/Html/Table/Table.php');

$data = [
   [ 'id' => 1, 'username' => 'Joop', 'password' => 'welkom', 'email' => 'joop@kopstoot.com' ],
   [ 'id' => 2, 'username' => 'Truus', 'password' => 'welkom', 'email' => 'truus@kopstoot.com' ],
   [ 'id' => 3, 'username' => 'Miep', 'password' => 'welkom', 'email' => 'miep@kopstoot.com' ],
   [ 'id' => 4, 'username' => 'Koos', 'password' => 'welkom', 'email' => 'koos@kopstoot.com' ],
   [ 'id' => 5, 'username' => 'Wilhelm', 'password' => 'welkom', 'email' => 'wilhelm@kopstoot.com' ],
   [ 'id' => 1, 'username' => 'Joop', 'password' => 'welkom', 'email' => 'joop@kopstoot.com' ],
   [ 'id' => 2, 'username' => 'Truus', 'password' => 'welkom', 'email' => 'truus@kopstoot.com' ],
   [ 'id' => 3, 'username' => 'Miep', 'password' => 'welkom', 'email' => 'miep@kopstoot.com' ],
   [ 'id' => 4, 'username' => 'Koos', 'password' => 'welkom', 'email' => 'koos@kopstoot.com' ],
   [ 'id' => 5, 'username' => 'Wilhelm', 'password' => 'welkom', 'email' => 'wilhelm@kopstoot.com' ],
];

$user_table = new Table($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tabel Test</title>

   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!-- HIER KOMT EEN TABEL MET USERS -->
   <?php $user_table->draw() ?>
</body>
</html>