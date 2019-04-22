<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="log-out">
                <a href="logout.php">Log out</a>
            </li>
        </ul>
    </div>

    <section>
        <h1>Welcome administrator: <?php echo $user->getName(); ?> </h1>
        <br>
        <h3> This part could not be finished due to technical problems. Thanks for understand</h3>
    </section>


    <div class="bottom">
    
    </div>
    
    <?php
     include ('Footer.php');
    ?>

    
</body>
</html>