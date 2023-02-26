<?php 
    include('parts/menu.php') ;

class User {
    private $conn; 
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function getUsers() {
        $sql = "SELECT * FROM register";
        $res = mysqli_query($this->conn, $sql);
        $users = array();
        
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                $users[] = $row;
            }
        }
        
        return $users;
    }
}

$user = new User($conn);
$users = $user->getUsers();

?>

<div class="main-content">
    <div class="outline">
        <h3>Menaxho Userat</h3>
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
            <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['ID']; ?></td>
                <td><?php echo $user['Emri']; ?></td>
                <td><?php echo $user['Mbiemri']; ?></td>
                <td><?php echo $user['Username']; ?></td>
                <td>
                    <a href="<?php echo SITEURL; ?>admin/update-user.php?id=<?php echo $user['ID']; ?>" class="btn-update">Update User</a> 
                    <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $user['ID']; ?>" class="btn-delete">Delete User</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="5">Nuk u gjend asnje user .</td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
</div>
