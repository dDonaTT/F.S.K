<?php
include('parts/menu.php');

class AdminSherbimet {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function getSherbimet(){
        $sql = "SELECT * FROM produktet";

        $res = mysqli_query($this->conn, $sql);

        $sherbimet = array();
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                $sherbimet[] = $row;
            }
        }
        
        return $sherbimet;
    }

    }
$sherbimi = new AdminSherbimet($conn);
$sherbimet = $sherbimi->getSherbimet();

   
        ?>
        <div class="main-content">
            <div class="outline">
                <h1>Menaxho Sherbimet</h1>
                <br><br>
                <a href="<?php echo SITEURL; ?>admin/add-sherbimet.php" class="btn-primary">Shto Sherbimet</a>
                <br><br><br>

                <?php
                if (isset($_SESSION['add'])) {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                ?>

                <table class="tablecontent  ">
                    <tr>
                        <th>ID</th>
                        <th>Fotografia</th>
                        <th>Emri</th>
                        <th>Kalibri</th>
                        <th>Shenime</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                    if (!empty($sherbimet)): ?>
                        <?php foreach ($sherbimet as $sherbimi): ?>

                            <tr>
                                <td><?php echo $sherbimi['ID']; ?></td>
                                <td>
                                    <?php echo $sherbimi['Fotografia']; ?>
                                </td>
                                <td><?php echo $sherbimi['Emri']; ?></td>
                                <td><?php echo $sherbimi['Kalibri']; ?></td>
                                <td><?php echo $sherbimi['Shenime']; ?></td>
                                <td>
                                <a href="<?php echo SITEURL; ?>admin/delete-sherbimet.php?id=<?php echo $sherbimi['ID']; ?>" class="btn-delete">Delete </a>
                                </td>
                                <?php endforeach; ?>
                                <?php else: ?>
                            </tr>

                            <?php
                        
                    
                        echo "<tr> <td colspan='7' class='error'>Nuk eshte shtuar asnje sherbim</td> </tr>";
                    ?>
                        <?php endif; ?>
                    
                                
                </table>

            </div>
        </div>
        



