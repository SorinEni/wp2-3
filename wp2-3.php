<?php 
 $submit = filter_input(INPUT_POST, 'submit');
 $euro = filter_input(INPUT_POST, 'euro');
 $switch = filter_input(INPUT_POST, 'currency');

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
    
<?php if ($switch==2) {?>
    <?php $euro = $euro * 27; ?>
    <?php
} else {?>
    <?php $euro = $euro / 27; ?> <?php
} ?> 
    <?php 
    if (isset($submit)) {?>
     
     <br>CZK:<?=$euro?>
<?php
} else {?> 
    <form action="wp2-3.php" method="post">
    <input type="text" name="euro" id="euro" > €
    <br>CZK -> €<input type="radio" name="currency" id="czke" value="1" >
    <br>€ -> CZK<input type="radio" name="currency" id="eczk" value="2" > 
    <br><input type="submit" name="submit" value="Odeslat">
    </form>
<?php 
} ?>      









</body>
</html>