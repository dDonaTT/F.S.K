<?php 

include('loginparts/menu.php');
include('admin/connection/connection.php');

class Registration {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function registerUser($emri, $mbiemri, $mosha, $username, $email, $nrTel, $password) {
        $password = md5($password);

        $sql = "INSERT INTO register SET
                emri='$emri',
                mbiemri='$mbiemri',
                mosha='$mosha',
                username='$username',
                email='$email',
                nrTel='$nrTel',
                password='$password'";

        $res = mysqli_query($this->conn, $sql) or die(mysqli_error());

        if ($res) {
            $_SESSION['login'] = "User Succesfully Registered! Please Login to Continue.";
            $_SESSION['login'] = $username;
            header('location:'.SITEURL.'login.php');
        }
    }
}

$registration = new Registration($conn);

if (isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $mosha = $_POST['DOB'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nrTel = $_POST['numritel'];
    $password = $_POST['pass'];

    $registration->registerUser($emri, $mbiemri, $mosha, $username, $email, $nrTel, $password);
}

?>

<div class="screen">
    <div class="screen_content">
        <section class="registration-container">
            <h2>Regjistrohu</h2>
            <section class="detail-container">
                <form action="" method="POST" class="registration-form" onsubmit="return validate()">
                    <h4> Të dhënat personale</h4>
                    <section class="personal-details">
                        <div class="two-details-item">
                            <label for="name">
                                <p>Emri</p>
                                <input type="text" name="emri" id="emri" placeholder="Shenoni emrin tuaj">
                            </label>
                            <label for="name">
                                <p>Mbiemri</p>
                                <input type="text" name="mbiemri" id="mbiemri" placeholder="Shenoni mbiemrin tuaj">
                            </label> 
                        </div>
                        <div class="two-details-item">
                            <label for="DOB">
                                <p>Mosha</p>
                                <input type="number" name="DOB" id="DOB" placeholder="Shenoni moshen tuaj">
                            </label>
                            <label for="username">
                                <p>Username</p>
                                <input type="text" name="username" id="username" placeholder="Shenoni username-in tuaj">
                            </label>                               
                        </div>
                        <div class="two-details-item">
                            <label for="email">
                                <p>Email</p>
                                <input type="email" name="email" id="email" placeholder="Shenoni emailin tuaj">
                            </label>
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
                                <p>Keni account?Kliko <a href="login.php"><b> ketu </b></a> tu kyqur</p>
                            </section>
                            <div class="login-btn">
                    <input type="submit" name="submit" value="Sign Up" class="btn-login">
                    </div>
                
            </div>
            <div class="screen_background">
                <span class="screen_background_shape screen_background_shape4"></span>
                <span class="screen_background_shape screen_background_shape3"></span>		
                <span class="screen_background_shape screen_background_shape2"></span>
                <span class="screen_background_shape screen_background_shape1"></span>
            </div>		
        </div>
    </div>
    <script src="register.js"></script>
    
</body>
</html>
