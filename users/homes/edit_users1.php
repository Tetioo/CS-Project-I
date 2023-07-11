<?php
@include '../../config.php';

if (isset($_POST['update_users'])) {
    $update_id = $_POST['update_id'];
    $update_fullname = $_POST['update_fullname'];
    $update_email = $_POST['update_email'];
    $update_phonenumber = $_POST['update_phonenumber'];
    $update_address = $_POST['update_address'];


    

    $update_query = mysqli_query($conn, "UPDATE users SET fullname = '$update_fullname', email = '$update_email' , phonenumber = '$update_phonenumber', address = '$update_address' WHERE id = '$update_id'");

    if ($update_query) {
        header('location: edit_users1.php');
        $message[] = 'item updated succesfully';
    } else {

        header('location: edit_users1.php');
        $message[] = 'item could not be updated';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="all_users.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>

    </style>
</head>

<body>

    
<div class="wrapper" >
                <table >

                  <thead>
                  <th>ID</th>
                  <th>Home name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Operation</th>

                  
                    </thead>

                    <tbody>
                        <?php

                        $select_users = mysqli_query($conn, "SELECT * FROM `users`");
                        if (mysqli_num_rows($select_users) > 0) {
                            while ($row = mysqli_fetch_assoc($select_users)) {
                        ?>

   

                                    <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phonenumber']; ?></td>
                                    <td><?php echo $row['address']; ?></td>

                                    <td>
                                        <a href="delete_users.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"><i class="fas fa-trash"></i> Delete </a>
                                        <a href="edit_users.php?edit=<?php echo $row['id']; ?>" class="edit-btn" onclick="return confirm('are your sure you want to edit this?');"><i class="fas fa-edit"></i> update </a>
                                    </td>
                                </tr>

                        <?php
                            };
                        } else {
                            echo "<div class='empty'>no items to delete</div>";
                        };
                        ?>
                    </tbody>
                </table>
                


            </section>

            <section class="edit-form-container" >

                <?php

                if (isset($_GET['edit'])) {
                    $edit_id = $_GET['edit'];
                    $edit_query = mysqli_query($conn, "SELECT * FROM users  WHERE id = $edit_id");
                    if (mysqli_num_rows($edit_query) > 0) {
                        while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
                ?>

                            <form class="form-inline" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="update_id" value="<?php echo $fetch_edit['id']; ?>">
                                <input type="text" class="box" required name="update_fullname" value="<?php echo $fetch_edit['fullname']; ?>">
                                <input type="text" class="box" required name="update_email" value="<?php echo $fetch_edit['email']; ?>">
                                <input type="number" class="box" required name="update_phonenumber" value="<?php echo $fetch_edit['phonenumber']; ?>">
                                <input type="text" class="box" required name="update_address" value="<?php echo $fetch_edit['address']; ?>">

                                <input type="submit" value="update the user" name="update_users" class="btn">
                                <input type="reset" value="cancel" id="close-edit" class="option-btn">
                            </form>
                            <a href ="../../admin_panel/admin_panel.php" class="style"><p>Go back to panel</p>

                <?php
                        };
                    };
                   
                };
                ?>

            </section>

    </div>


</body>

</html>