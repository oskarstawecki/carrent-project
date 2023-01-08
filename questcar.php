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
            <div id="form-info"></div>
            <div id="form-left">
                Name : <input type="text" id="name" pattern="[A-Z]{1}[a-z]{15}"><br>
                Surname : <input type="text" id="surname" pattern="[A-Z]{1}[a-z]{15}"><br>
                Age : <input type="number" id="age" pattern="[1-9]{1}[0-9]{2}"><br>
                Phone : <input type="number" id="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>
                E-mail : <input type="email" id="email"><br>
            </div>
            <div id="form-right">
                Brand : <input type="text" id="brand"><br>
                Model : <input type="text" id="model"><br>
                Production year : <input type="number" id="year"><br>
                Odometer : <input type="number" id="odometer" placeholder="in KM"><br>
                <label for="transmission">Transmission : </label>
                    <select id="transmission">
                        <option value="manual">Manual</option>
                        <option value="automatic">Automatic</option>
                    </select>
                <label for="drive">Drive : </label>
                    <select id="drive">
                        <option value="AWD">AWD</option>
                        <option value="RWD">RWD</option>
                        <option value="FWD">FWD</option>
                    </select>
            </div>
            <br>
            <input type="reset" value="CLEAR"> &nbsp; <input type="submit" value="SUBMIT">
        </form>
    </main>
    <footer>
        
    </footer>

</body>

</html>