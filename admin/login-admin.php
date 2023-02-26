<?php
    include('connection/connection.php');
    

    class Login {
        private $username;
        private $password;
        private $conn;

        public function __construct($username, $password, $conn) {
            $this->username = $username;
            $this->password = md5($password);
            $this->conn = $conn;
        }

        public function authenticate() {
            $sql = "SELECT * FROM admin WHERE username='$this->username' and password='$this->password'";
            $res = mysqli_query($this->conn, $sql);
            $count = mysqli_num_rows($res);
            
            if($count == 1){
                $_SESSION['login']="<div class='text1'>Welcome $this->username</div>";
                $_SESSION['user']=$this->username;
                header('location:'.SITEURL.'admin/');
            }else{
                $_SESSION['login']="<div class='text text-center'>Username ose Passwordi nuk perputhen</div>";
                header('location:'.SITEURL.'admin/login-admin.php');
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="../img/logo.png">
    <title>F.S.K</title>
</head>
<body>
    <div class="container">
        <div id="titulli">  <h2>Admin Login</h2> </div> <br>
            <?php 
                if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset ($_SESSION['login']);
                }
                if(isset($_SESSION['no-login-message'])){
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
        <br>


            <form action="" method="POST" class="text-center">
                Username: <br>
                <input type="text" name="username" placeholder="Enter Username" class="input"><br> <br>
                Password: <br>
                <input type="password" name="password" placeholder="Enter Password" class="input"><br><br>

                <input type="submit" name="submit" value="Login" class="btn-login">
            </form>
        </div>
    </div>

    
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $login = new Login($_POST['username'], $_POST['password'], $conn);
        $login->authenticate();
    }
?>
