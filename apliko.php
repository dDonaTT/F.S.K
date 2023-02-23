<?php 
    include('navbar/navbar.php');

class Apliko {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function userApliko($emri, $mbiemri, $mosha, $username, $email, $nrTel, $password) {
        $password = md5($password);

        $sql = "INSERT INTO aplikimet SET
                emri='$emri',
                mbiemri='$mbiemri',
                mosha='$mosha',
                username='$username',
                email='$email',
                NumriTelefonit='$nrTel',
                passwordi='$password'";

        $res = mysqli_query($this->conn, $sql) or die(mysqli_error());

        if ($res) {
            $_SESSION['login'] = "Aplikimi u regjistrua me sukses";
            $_SESSION['login'] = $username;
            header('location:'.SITEURL.'home.php');
        }
    }
}

$registration = new Apliko($conn);

if (isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $mosha = $_POST['DOB'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nrTel = $_POST['numritel'];
    $password = $_POST['pass'];

    $registration->userApliko($emri, $mbiemri, $mosha, $username, $email, $nrTel, $password);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.S.K</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/styleapliko.css">
</head>
<body>
    
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <a href="home.php"><img src="img/logo.png" alt="logo"></a>
            </div> 

    

    </div>
    <h2 class="text">APLIKIMI NE F.S.K</h2>
    <div class="apliko">
    <section class="detail-container">
                        <form action="" method="POST" class="registration-form" onsubmit="return validate()">
                        <h4 class="fsk">Sherbimi ne FSK:</h4>
                        <div class="sherbimi">
                            
                            <label for="aplikimi" class="aplikimi">Deshiroj te aplikoj per:</label><br>
                            <select name="aplikimi" id="aplikimi" form="aplikimform">
                            <option value="zgjedh..">Zgjedh...</option>
                            <option value="rekrut">Rekrut(Oficer)</option>
                            <option value="ushtar">Ushtar</option>
                               </select>
                               <br>
                               <label for="aplikimigjuha" class="aplikimigjuha">Deshiroj te aplikoj ne gjuhen:</label><br>
                            <select name="aplikimigjuha" id="aplikimigjuha" form="aplikimform">
                            <option value="zgjedh..">Zgjedh...</option>
                            <option value="shqipe">Shqipe</option>
                            <option value="ushtar">Tjeter</option>
                               </select>
                               </div>
                            
                            <div class="personalinfo">
                            <h4 class="tedhenat"> Të dhënat personale</h4>
                            <section class="personal-details">
                                <div class="two-details-item">
                                    <label for="name">
                                        <p>Emri</p>
                                        <input type="text" name="emri" id="emri" placeholder="Shenoni emrin tuaj"></label>
                                        <label for="name">
                                            <p>Mbiemri</p>
                                            <input type="text" name="mbiemri" id="mbiemri" placeholder="Shenoni mbiemrin tuaj"></label> 
                                </div>
                                <div class="two-details-item">
                                    <label for="DOB">
                                        <p>Mosha</p>
                                        <input type="number" name="DOB" id="DOB" placeholder="Shenoni moshen tuaj"></label>
                                        <label for="username">
                                            <p>Username</p>
                                            <input type="text" name="username" id="username" placeholder="Shenoni username-in tuaj"></label>                               
                               </div>
                                <div class="two-details-item">
                                    <label for="email">
                                        <p>Email</p>
                                        <input type="email" name="email" id="email" placeholder="Shenoni emailin tuaj"></label>
                                    <label for="ph">
                                        <p>Numri telefonit</p>
                                        <input type="tel" name="numritel" id="ph" placeholder="Shenoni numrin e telefonit "></label>                          
                                </div>
                                <div class="two-details-item">
                                    <label for="ph">
                                        <p>Passwordi</p>
                                        <input type="text" name="pass" id="pass" placeholder="Shenoni passwordin tuaj "></label>
                                    <label for="adresa">
                                        <p>Confirm Password</p>
                                        <input type="text" name="cpass" id="cpass" placeholder="Konfirmoni passwordin tuaj"></label>                            
                                </div>
                            </section>
                            <input type="submit" name="submit" value="Apliko" class="submit-btn">
    </div>
</div>
</div>
</body>
</html>