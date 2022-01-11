<?php
 require_once __DIR__ . './script.php';
 require_once __DIR__ . './publicPremium.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $user1 = new User('Giorgio Mazzon', 'PC', 1000);
    ?>
    <H1>Normal User</H1>
    <h3>Nome Utente: <?php echo $user1->getName()?></h3>
    <h3>Prodotto: <?php echo $user1->getProduct()?></h3>
    <h3>Prezzo: <?php echo $user1->getPrice()?></h3>

    <hr>

    <?php
      $user2 = new UserPremium('Martina Pirrone', 'Xbox', 600);
    ?>
    <H1>Premium User</H1>
    <h3>Nome Utente: <?php echo $user2->getName()?></h3>
    <h3>Prodotto: <?php echo $user2->getProduct()?></h3>
    <h3>Sconto: <?php echo $user2->discount?></h3>
    <h3>Prezzo: <?php echo $user2->getDiscount()?></h3>

</body>
</html>