<?php
    include __DIR__."/classes/products.class.php";
    include __DIR__."/classes/electronics.class.php";
    
    $elec1 = new Electronics("Telecomodità", "Delpino", "Italia", "", "Nero", 5, "https://media.gettyimages.com/photos/low-angle-view-of-remote-control-against-white-background-picture-id1094028672?k=6&m=1094028672&s=612x612&w=0&h=Hklv66o2-XH__-vGFWl6FObUfVtz8PbjxlaIrqoS6iE=", "Un telecomando ergonomico e leggero che si adatta ad ogni tipo di superfice.",  "", "Telecomando", "");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <h2><?php echo $elec1->name ?></h2>
    <ul>
        <li>
        <?php echo "Marca: " . $elec1->brand ?> <br>
        </li>
        <li>
        <?php echo "Paese di origine: " . $elec1->origin ?> <br>
        </li>
        <li>
        <?php echo "Prezzo: " . $elec1->price . "€"  ?> <br>
        </li>
    </ul>
    <img src=<?php echo $elec1->images ?> alt=<?php echo $elec1->name . " illustrazione" ?>>
    <p>
        <?php echo $elec1->description ?>
    </p>
</body>
</html>