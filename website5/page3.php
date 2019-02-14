<?php 
    // set an array in the cookie
    $user = ['name' => 'Brad', 'email' => 'test@test.com', 'age'=> 35];

    // To do so you have to serialize the array
    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    // To read it you have to unserialize it
    $user = unserialize($_COOKIE['user']);

    echo $user['email'];
    print_r($user);

?>