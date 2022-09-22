<?php
        $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
        $address = filter_var(trim($_POST['address']),FILTER_SANITIZE_STRING);
    
        $pass = md5($pass."jfdawdawd");
    
        $mysql = new mysqli('localhost', 'root', 'root', 'streetlegacy'); 
    
        $mysql->query("INSERT INTO `users` (`login`, `email`, `pass`, `address`, `role`) 
        VALUES('$login', '$email', '$pass', '$address', 'user')");
        

        $mysql->close();
    
        header('Location: /');
?>