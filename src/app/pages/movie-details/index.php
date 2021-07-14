<?php
  date_default_timezone_set('America/Sao_Paulo');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
 echo "<form>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date(D-m-y H:i:s)."'>
    <textarea name='message'></textarea>
    <ion-button name=''>Comentar!</ion-button>

    </form>";
  ?>


</body>
</html>
