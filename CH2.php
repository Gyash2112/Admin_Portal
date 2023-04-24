<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH2</title>
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
                        <h1>Vision & Mission Statements of the Department</h1>
                    </div>

                    <hr>

                    <div class="sub-header">
                        <h2>Vision Statement of the Department</h2>
                        <p>To be a recognized department of Computer Science & Engineering that produces versatile computer engineers, capable of adapting to the changing needs of computer and related industry.</p>
                    </div>


                    <div class="sub-header">
                        <h2>Mission Statement of the Department:</h2>
                        <p>
                            <ol type="1" start="1">
                                <li>To provide broad based quality education with knowledge and attitude to succeed in Computer Science & Engineering careers.</li>
                                <li>To prepare students for emerging trends in computer and related industry.</li>
                                <li>To develop competence in students by providing them skills and aptitude to foster culture of continuous and life-long learning.</li>
                                <li>To develop practicing engineers who investigate research, design and find workable solutions to complex engineering problems with awareness & concern for society as well as environment.</li>
                            </ol>
                        </p>
                    </div>
                </div>
                <div class="submit">
                    <form action="send_status.php" method="post" style="display:flex; justify-content:center;">
                        <input type="hidden" name="chapter" value="CH2">
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
