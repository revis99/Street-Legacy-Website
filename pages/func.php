<?php

  $mysql = new mysqli('localhost','root', 'root', 'streetlegacy');

  function get_product_by_id($id) {
    global $mysql;
    
      $query = $mysql->query("SELECT * FROM `product` WHERE `id`='$id' ");
      $resp = $query->fetch_assoc();

      return $resp;
  }

?>