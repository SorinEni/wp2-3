<?php 
 $submit = filter_input(INPUT_POST, 'submit');
 $amount = filter_input(INPUT_POST, 'amount');
 $switch = filter_input(INPUT_POST, 'currency');
 define('EUR_CZK', 27);
 
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Převod</h1>
    
<?php if ($switch=="czk_eur") {?>
    <?php $final = $amount * EUR_CZK; ?>
    <?php
} else {?>
    <?php $final = $amount / EUR_CZK; ?> <?php
} ?> 
    <?php 
    if (isset($submit)) {?>
     <br><?=$final?>
<?php
} else {?> 
    <form action="wp2-3.php" method="post">
    <input type="text" name="amount" id="amount" > 
    <br>CZK -> €<input type="radio" name="currency" id="czke" value="eur_czk" >
    <br>€ -> CZK<input type="radio" name="currency" id="eczk" value="czk_eur" > 
    <br><input type="submit" name="submit" value="Odeslat">
    </form>
<?php 
} ?>      









</body>
</html>