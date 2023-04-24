<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/timetable.css">
</head>
<body>
    <section class="container">
        <?php include 'navbar.php';?>

        <main>
            <?php include 'sidenav.php';?>

            <div class="dashboard">
                 <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
                </div>

                <div class="timetable">
                    <table>
                        <tr>
                            <th></th>
                            <th>Lec 1</th>
                            <th>Lec 2</th>
                            <th>Lec 3</th>
                            <th>Lec 4</th>
                            <th>Lec 5</th>
                            <th>Lec 6</th>
                            <th>Lec 7</th>
                            <th>Lec 8</th>
                        </tr>   

                        <tr>
                            <td>Monday</td>
                            <td><div>KAS101</div> <div>[A-11]</div></td>
                            <td>2KAS101</td>
                            <td>3KAS101</td>
                            <td>4KAS101</td>
                            <td>5KAS101</td>
                            <td>6KAS101</td>
                            <td>7KAS101</td>
                            <td>8KAS101</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>


                    </table>
                </div>

            </div>
        </main>
    </section>

    <script src="js/sidenav.js"></script>
    <script src="js/dropdown.js"></script>
</body>
</html>
