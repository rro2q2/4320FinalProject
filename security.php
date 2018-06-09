<?php
    include 'util/loginCheck.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Settings | Security</title>
        <?php include 'includes/globalHead.html' ?>
        <link rel="stylesheet" href="res/css/settings.css">
        <link rel="stylesheet" href="res/css/settingsNav.css">
    </head>

    <body>
        <?php
            include 'includes/header.php';
            include 'includes/nav.php';
        ?>
        
        <h1>Settings</h1>
        
        <div class="nav">
            <?php
                $current = 'security';
                include 'includes/settingsNav.php';
            ?>
        </div>
        
        <div class="display">
            <div>
                <h2>Change Email</h2>
                <form action="/util/handleAccount.php" method="POST">
                <div>
                    <label for="oldPassword">Old Email</label>
                    <br>
                    <input type="password" name="oldPassword">
                </div>
             
                <div>
                    <label for="newPassword">New Email</label>
                    <br>
                    <input type="password" name="newPassword">
                </div>
             
                <div>
                    <label for="confirmNewPassword">Confirm new Email</label>
                    <br>
                    <input type="password" name="confirmNewPassword">
                </div>
             
                <input type="submit" name="updatePassword" value="Update Password">
                </form>
            </div>
            
            <div>
                <h2>Change Password</h2>
                <form action="/util/handleAccount.php" method="POST">
                <div>
                    <label for="oldPassword">Old Password</label>
                    <br>
                    <input type="password" name="oldPassword">
                </div>
             
                <div>
                    <label for="newPassword">New Password</label>
                    <br>
                    <input type="password" name="newPassword">
                </div>
             
                <div>
                    <label for="confirmNewPassword">Confirm new Password</label>
                    <br>
                    <input type="password" name="confirmNewPassword">
                </div>
             
                <input type="submit" name="updatePassword" value="Update Password">
                </form>
            </div>

            <div>
                <h2>Delete Account</h2>
                <form>
                    <input type="button" name="deleteAccount" value="Delete Account">
                </form>
            </div>
            
        </div>
        
        <?php include 'includes/footer.html'; ?>
    </body>
</html>