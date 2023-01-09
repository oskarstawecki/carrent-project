<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najlepsza wypożyczalnia w Polce ! - PARTNERTSHIP</title>
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
            <p>Best car rent in Poland </p>
    </header>

    <main>
        <form action="questcar.php" method="POST">
            <div id="form-left">
                Name : <input type="text" id="name" name="name"><br>
                Surname : <input type="text" id="surname" name="surname"><br>
                Age : <input type="number" id="age" name="age"><br>
                Phone : <input type="text" id="phone" name="phone"><br>
                E-mail : <input type="email" id="email" name="email"><br>
            </div>
            <div id="form-right">
                Brand : <input type="text" id="brand" name="brand"><br>
                Model : <input type="text" id="model" name="model"><br>
                Production year : <input type="number" id="year" name="year"><br>
                Odometer : <input type="number" id="odometer" name="odometer" placeholder="in KM"><br>
                <label for="transmission">Transmission : </label>
                    <select id="transmission" name="transmission">
                        <option value="manual">Manual</option>
                        <option value="automatic">Automatic</option>
                    </select>
                <label for="drive">Drive : </label>
                    <select id="drive" name="drive">
                        <option value="AWD">AWD</option>
                        <option value="RWD">RWD</option>
                        <option value="FWD">FWD</option>
                    </select>
            </div>
            <br>
            <input type="reset" value="CLEAR"> &nbsp; <input type="submit" id="submit" name="submit" value="SUBMIT">
        </form>

        <?php
            include("connect.php");

                $fname=$_REQUEST['name'];
                $surname=$_REQUEST['surname'];
                $age=$_REQUEST['age'];
                $phone=$_REQUEST['phone'];
                $email=$_REQUEST['email'];
                $brand=$_REQUEST['brand'];
                $model=$_REQUEST['model'];
                $cyear=$_REQUEST['year'];
                $odometer=$_REQUEST['odometer'];
                $transmission=$_REQUEST['transmission'];
                $drive=$_REQUEST['drive'];

                if(isset($_REQUEST['submit'])){
                    $sql= "INSERT INTO questcar(fname,surname,age,phone,email,brand,model,cyear,odometer,transmission,drive) VALUES ('$fname','$surname','$age','$phone','$email','$brand','$model','$cyear','$odometer','$transmission','$drive')";
                    if(mysqli_query($conn,$sql)){
                        echo "<div id='form-info'>We got all the information we needed. We will contact you by phone or e-mail</div>";
                    }
                    else{
                        echo "<div id='form-info'>Something is wrong with your form ! </div>";
                    }
                }

            mysqli_close($conn);
        ?>
    </main>
    <footer>
        
    </footer>

</body>

</html>