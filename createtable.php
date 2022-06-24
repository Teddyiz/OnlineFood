<?php
include 'connection.php';
try {
    $sql="CREATE TABLE food(
          id INT NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(id),
          name VARCHAR(225),
          category VARCHAR(225),
          price VARCHAR(225),
          photo VARCHAR(225)
        )";

    $sql="CREATE TABLE user(
          id INT NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(id),
          name VARCHAR(225),
          email VARCHAR(225),
          password VARCHAR(225)
        )";

     $sql="CREATE TABLE admin(
          id INT NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(id),
          name VARCHAR(225),
          email VARCHAR(225),
          password VARCHAR(225)
        )";
     
      $sql="CREATE TABLE orders(
          id INT NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(id),
            first_name VARCHAR(255),
            last_name VARCHAR(255),
            email VARCHAR(255),
            address1 VARCHAR(255),
            address2 VARCHAR(255),
            country VARCHAR(255),
            zipcode VARCHAR(255),
            cname VARCHAR(255),
            cardnumber VARCHAR(255)
        )";


    $db-> exec($sql);
    echo"table created";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>