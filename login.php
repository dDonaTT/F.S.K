<?php
include('loginparts/menu.php');
include('navbar/login-check.php');
include('admin/connection/connection.php'); 

class Login {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    public function validateUser($username, $password) {
        $password = md5($password);
        $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";
        $res = mysqli_query($this->conn, $sql);
        $count = mysqli_num_rows($res);
        if($count === 1){        
            $_SESSION['login']="Login Successful";
            $_SESSION['user']=$username;       
            header('location:'.SITEURL.'home.php'); 
        } else {
            $_SESSION['login']="Username or Password did not match.";
            header('location:'.SITEURL.'login.php');
        }
    }
}

$login = new Login($conn);

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login->validateUser($username, $password);
}

?>
<div class="screen">
    <div class="screen_content">
        <form action="" method="POST" class="login" onsubmit="return validate()">
            <label>Log in</label>
            <div class="login_field">
                <i class="login_icon"></i>
                <input type="text" name="username" class="login_input" placeholder="Username" id="user">
            </div>
            <div class="login_field">
                <i class="login_icon"></i>
                <input type="password" name="password" class="login_input" placeholder="Password" id="pass">                        
            </div>
            <p>Kyquni si <a href="admin/login-admin.php" class="admin"> <b> Admin!</b> </a><br></p>
            <p>Nuk keni account?Kliko <a href="register.php"><b> ketu </b></a> tu regjistruar</p>
            <div class="login-btn">
                <input type="submit" name="submit" value="Login" class="btn-login">
            </div>			
        </form>                
    </div>
    <div class="screen_background">
        <span class="screen_background_shape screen_background_shape4"></span>
        <span class="screen_background_shape screen_background_shape3"></span>		
        <span class="screen_background_shape screen_background_shape2"></span>
        <span class="screen_background_shape screen_background_shape1"></span>
    </div>		
</div>
<script src="loginscript.js"></script>
</body>
</html>
