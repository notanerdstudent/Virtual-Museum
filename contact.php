<?php

    if (isset($_POST['btnsmt'])) {
        $name1 = $_POST['nameprson'];
        $email = $_POST['emailprson'];
        $msg = $_POST['msgprson'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Museum</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Farro:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <?php
    
    include 'css.php';
    
    ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php

    include 'header.php';

    ?>

    <article>
        <div id="content">
        <h2>Contact Us</h2>
            <form method="POST">
                <div class="box">
                    <span class="fa fa-user"></span>
                    <input type="text" required name="nameprson" placeholder="Name">
                </div>
                <div class="box space">
                    <span class="fa fa-envelope-open"></span>
                    <input type="email" required name="emailprson" placeholder="Email Address">
                </div>
                <div class="box space">
                    <span class="fa fa-comment-alt"></span>
                    <input type="text" required name="msgprson" placeholder="Your Message">
                </div>
                <br>
                <div class="box">
                    <input type="submit" id="submit" name="btnsmt" value="Drop A Message">
                </div>
            </form>
        </div>
    </article>

    <?php 

        include 'footer.php';

    ?>

</body>

</html>