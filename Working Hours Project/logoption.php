<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work Study Hours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/main.css" rel="stylesheet">
<?php
include("navbar.php");
?>
<body>
<form class="logoption" action="inout.php"  method="POST">
<h2> RECORD HOURS </h2>
<br>
<p class="center"><input class= "running" name="login" type="submit" value="login"></p>
<br>
<p class="center"><input  class= "running" type="submit" name="logout" value ="logout"></p>

</form>

<?php
include("footer.php");
?>
</body>
</html>