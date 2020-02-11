<?php
    require_once '../load.php';
    date_default_timezone_set('America/Toronto');
    $update_date = date("Y-m-d, H:i:s");
    echo $update_date;

    if(isset($_POST['submit'])) {
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $country = trim($_POST['country']);

        if(!empty($firstname) && !empty($email)) {
            // Do the Signup form 
            $message = signup($firstname, $lastname, $email, $country, $update_date);

        } else {
            $message = 'Please fill out the required field';
        }
        
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Page</title>
</head>
<body>
    <?php echo !empty($message) ? $message:'' ?>
    <form action="admin_signup.php" method="post">
        <label>First Name</label><br>
        <input type="text" name="firstname" value="" /><br>

        <label>Last Name</label><br>
        <input type="text" name="lastname" value="" /><br>

        <label>Email</label><br>
        <input type="text" name="email" value="" /><br>

        <label>Country</label><br>
        <input type="text" name="country" value="" /><br>

        <button name="submit">Submit</button>

    </form>
</body>
</html>