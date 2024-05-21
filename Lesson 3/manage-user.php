<div class="manage-users">
    <a href="dashboard.php?id=add-new-user"><button>Add New User</button></a>

    <!-- Connect to the database -->
    <?php
    include_once "database-connection.php";

    // Create the query
    $sql = "SELECT * FROM users";

    // Execute the query
    $result = $database_connection->query($sql);
    ?>

    <div class="user-list">
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</div>