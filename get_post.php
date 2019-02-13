<?php 
    // if(isset($_GET['name'])) {
    //     // echo $_GET['name'];
    //     // print_r($_GET);
    //     # Use htmlentities to protect yourself from xss
    //     // echo htmlentities($_GET['name']);
    // }

    // More secure way to transmit data, it won't appear in the url
    // if(isset($_POST['name'])) {
    //     $name = htmlentities($_POST['name']);
    //     echo $name;
    // }
    
    // Work wether it is GET or POST
    // if(isset($_REQUEST['name'])) {
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    // }

    echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET / POST</title>
</head>

<body>
    <form method='GET' action='get_post.php'>
        Name<br>
        <input type="text" name="name"><br>
        Email<br>
        <input type="text" name="email"><br>
        <input type="submit" value="Submit">

    </form>

</body>

</html>