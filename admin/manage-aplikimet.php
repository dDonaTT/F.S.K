<?php include('parts/menu.php') ?>
    <div class="main-content">
        <div class="outline">
            <h3>Menaxho Aplikimet </h3>
            <br>
            

            <?php 
            if(isset($_SESSION['delete'])){
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['update'])){
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
            ?>
                <br>
                <br>   
                <table class="tablecontent">
                <tr>
                    <th>ID</th>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Mosha</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>NumriTelefonit</th>
                    <th>Passwordi</th>
                </tr>
                <?php 
                    $sql = "SELECT * FROM aplikimet";
                    $res = mysqli_query($conn,$sql);
                    
                    if($res==TRUE){
                        $count = mysqli_num_rows($res);
                        if($count>0){
                            while($rows=mysqli_fetch_assoc($res)){
                                 $id = $rows['ID'];
                                 $emri = $rows['Emri'];
                                 $mbiemri = $rows['Mbiemri'];
                                 $mosha = $rows['Mosha'];
                                 $username=$rows['Username'];
                                 $email = $rows['Email'];
                                 $nrTel = $rows['NumriTelefonit'];

                                 ?>
                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $emri;?></td>
                                    <td><?php echo $mbiemri;?></td>
                                    <td><?php echo $mosha;?></td>
                                    <td><?php echo $username;?></td>
                                    <td><?php echo $email;?></td>
                                    <td><?php echo $nrTel;?></td>


                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-aplikimi.php?id=<?php echo $id;?>" class="btn-update">Update Aplikimi</a> 
                                        <a href="<?php echo SITEURL; ?>admin/delete-aplikimi.php?id=<?php echo $id;?>" class="btn-delete">Delete Aplikimi</a>
                                            </td>

                                    </tr>
                                    
                                    
                

                                 <?php

                            }

                        }else{

                        }

                    }
                ?>
                <tr>
                <td colspan="5">Nuk ka asnje aplikim.</td>
                                            </tr>
               

            
            </table>
        </div>
    </div>
    <?php

if(isset($_POST['submit'])){
    
   echo $emri = $_POST['emri'];
   echo $mbiemri = $_POST['mbiemri'];
   echo $mosha = $_POST['DOB'];
   echo $username = $_POST['username'];
   echo $email = $_POST['email'];
   echo $nrTel = $_POST['numritel'];
   echo $password = $_POST['pass'];

}

?>