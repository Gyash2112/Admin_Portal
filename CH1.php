<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH1</title>
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <!-- <link rel="stylesheet" href="css/certificates.css"> -->
    <link rel="stylesheet" href="css/index_page.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="container" id="container">
        <?php include 'navbar.php';?>
        <main>
            <?php include 'sidenav.php';?>

            <div class="dashboard">
            <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
            </div>

            <div class="block">
                    <div class="header">
                        <h1>Vision & Mission Statements of the Institute</h1>
                    </div>

                    <hr>

                    <div class="sub-header">
                        <h2>Vision Statement of the Institute:</h2>
                        <p>To achieve excellence in professional education and create an ecosystem for the holistic development of all stakeholders.</p>
                    </div>


                    <div class="sub-header">
                        <h2>Mission Statement of the Institute:</h2>
                        <p>To provide an environment of effective learning and innovation transforming students into dynamic, responsible and productive professionals in their respective fields, who are capable of adapting to the changing needs of the industry and society.</p>
                    </div>
                </div>

                <div class="submit">
                    <form action="send_status.php" method="post" style="display:flex; justify-content:center;">
                        <input type="hidden" name="chapter" value="CH1">
                        <input type="submit" value="submit">
                    </form>
                </div>

            </div>
        </main>
    </div>
    <script src="js/sidenav.js"></script>
    <script src="js/dropdown.js"></script>
</body>
</html>