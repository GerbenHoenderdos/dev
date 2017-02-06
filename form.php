<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    kleur:
    <input name="clr" type="text" placeholder="colour"><br>

    Naam:
    <input name="name" type="text" placeholder="Name"><br>

    <input type="submit" name="submit">
</form>
<?php
    if(isset($_POST['clr']))
        $selected_color = $_POST['clr'];

    echo"<br><font color='$selected_color'>This text is in color: $selected_color";

if(isset($_POST['name']))
    $name = $_POST['name'];

echo"<br><font color='$selected_color'>my name is: $name";
?>
</body>
</html>