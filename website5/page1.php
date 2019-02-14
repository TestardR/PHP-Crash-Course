<?php 
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);
         // 1 hour
        setcookie('username', $username, time()+3600);
       
        // Redirect
        header('Location: page2.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="username" placeholder='Enter Username'>
        </div>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>