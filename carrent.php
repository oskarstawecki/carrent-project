<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najlepsza wypożyczalnia w Polce ! - OUR CARS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/images/web/favicon.png">
</head>

<body>
    <header>
        <div class="top-left">
            <img src="logo.png" alt="CarRentLogo">
        </div>

        <div class="top-right">
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="carrent.php">OUR CARS</a></li>
                    <li><a href="questcar.php">PARTNERSHIP</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <div id="napis">
            Best car rent in Poland
        </div> 
    </header>

    <main>
        <?php
        include("connect.php");  
            $qr = "SELECT * FROM cars WHERE rented='no'";
            $result = $conn->query($qr);
            while ($row = $result->fetch_assoc()) {
                echo "<form method='POST'>";
                $photo = $row['photo'];
                $brand = $row['brand'];
                $model = $row['model'];
                $info = $row['info'];
                $price = $row['price'];
                $id = $row['id'];
                
                echo '<div id="cars-container">';
                echo "<p><img src='images/cars/$photo' alt='carphoto'></p>";
                echo "<p>$brand , $model</p>";
                echo "<p> $info</p>"; 
                echo "<p>$price &nbsp;<input type='button' value='Wynajmij' name='rented' id='rented'/></form></p>";
                echo '</div>';

            }
            if(isset($_POST['rented'])){ 
                $ask = "UPDATE cars SET rented='yes' WHERE id=$id";
                $res = $conn->query($ask);
            }

        mysqli_close($conn)
        ?>
    </main>
    <footer>
        
    </footer>

</body>

</html>