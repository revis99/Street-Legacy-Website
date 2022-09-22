<?php
        session_start(); 

        $price = $_POST['total_sum'];
        
        $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
        $tel = filter_var(trim($_POST['tel']),FILTER_SANITIZE_STRING);
        $address = filter_var(trim($_POST['address']),FILTER_SANITIZE_STRING);
        $dostavka= filter_var(trim($_POST['dostavka']),FILTER_SANITIZE_STRING);
    
    
        $mysql = new mysqli('localhost', 'root', 'root', 'streetlegacy'); 
    
        $mysql->query("INSERT INTO `orders` (`name`, `email`, `tel`, `address`, `dostavka`, `sum`) 
        VALUES('$name', '$email', '$tel', '$address', '$dostavka', '$price')");
        

        $mysql->close();
    
        header('Location: /');
?>