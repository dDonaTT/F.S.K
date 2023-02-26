<?php include('parts/menu.php') ?>
    <div class="main-content">
        <div class="outline">
            <h3>Menaxho Admin</h3>
            <br>
            

            <?php if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['delete'])){
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['update'])){
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
            ?>
            <br><br>
            <a href="add-admin.php" class="btn-primary">Shto Admin</a>
                <br>
                <br>    
            <table class="tablecontent">
                <tr>
                    <th>ID</th>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                <?php 
                    $sql = "SELECT * FROM admin";
                    $res = mysqli_query($conn,$sql);
                    
                    if($res==TRUE){
                        $count = mysqli_num_rows($res);
                        if($count>0){
                            while($rows=mysqli_fetch_assoc($res)){
                                 $id = $rows['ID'];
                                 $emri = $rows['Emri'];
                                 $mbiemri = $rows['Mbiemri'];
                                 $username=$rows['Username'];
                                 ?>
                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $emri;?></td>
                                    <td><?php echo $mbiemri;?></td>
                                    <td><?php echo $username;?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id;?>" class="btn-update">Update Admin</a> 
                                        <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-delete">Delete Admin</a>
                                            </td>

                                    </tr>
                

                                 <?php

                            }

                        }else{

                        }

                    }
                ?>
               

            
            </table>
        </div>
    </div>
    <?php

if(isset($_POST['submit'])){
    
   echo $emri = $_POST['emri'];
   echo $mbiemri = $_POST['mbiemri'];
   echo $username = $_POST['username'];
   echo $password = $_POST['password'];

}

?>
    