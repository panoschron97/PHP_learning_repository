<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

use Dom\Mysql;

    include "db.php";
    echo "<br><br>----------";
    echo "<br><br>Ok!";
    echo "<br><br>----------";
    $username1 = 'edwin';
    $username2 = 'nikos';
    $sql = "SELECT * FROM users WHERE 1 = 1 OR username IN ('$username1') ORDER BY id ASC";
    $result = mysqli_query($connection, $sql);
    if($result)
    {
    while($row = mysqli_fetch_assoc($result))
    {
    echo "<br><br>";
    print_r($row["id"] . " - " . $row["username"] . " - " . $row["email"] . " - " . $row["password"] . " - " . $row["reg_date"]);    
    }
    }
    else
    {
    echo "<br><br>Error : " . mysqli_connect_error();
    }
    echo "<br><br>----------";
    $sql_prepare = "SELECT * FROM users WHERE username = ?";
    $statement = mysqli_prepare($connection, $sql_prepare);
    mysqli_stmt_bind_param($statement, "s", $username2);
    $result2 = mysqli_stmt_execute($statement);
    echo "<br><br>Result : " . $result2;
    $result2 = mysqli_stmt_get_result($statement);
     if($result2)
    {
    while($row2 = mysqli_fetch_assoc($result2))
    {
    echo "<br><br>";
    print_r($row2["id"] . " - " . $row2["username"] . " - "  . $row2["email"] . " - " . $row2["password"] . " - " . $row2["reg_date"]);    
    }
    }
    else
    {
    echo "<br><br>Error : " . mysqli_connect_error();
    }
    echo "<br><br>----------";
    $connection2 = mysqli_connect("localhost", "root", "27031997");
    $sql2 = "CREATE DATABASE IF NOT EXISTS prepare_statement_database";
    $result3 = mysqli_query($connection2, $sql2);
    if($result3)
    {
        echo "<br><br>Database created!";
    }
    else
    {
        echo "<br><br>Error : " . mysqli_connect_error();
    }
    $connection3 = mysqli_connect("localhost", "root", "27031997", "prepare_statement_database");
    $sql3 = "CREATE TABLE IF NOT EXISTS users
    (
    id INTEGER AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    CONSTRAINT username_unq UNIQUE(username),
    CONSTRAINT email_unq UNIQUE(email)
    )";
    $result4 = mysqli_query($connection3, $sql3);
    if($result4)
    {
        echo "<br><br>Table created!";
    }
    else
    {
        echo "<br><br>Error : " . mysqli_connect_error();
    }
    $connection3 = mysqli_connect("localhost", "root", "27031997", "prepare_statement_database");
    $sql4 = "INSERT INTO users(username, email, password) VALUES('panos', 'panos_chron@hotmail.com', 'hashed_password1'),
('nikos', 'nikos_chron@hotmail.com', 'hashed_password2'),
('alexis', 'alexis_chron@hotmail.com', 'hashed_password3'),
('sotiris', 'sotiris_chron@hotmail.com', 'hashed_password4'),
('giwrgos', 'giwrgos_chron@hotmail.com', 'hashed_password5'),
('manos', 'manos_chron@hotmail.com', 'hashed_password6'),
('arman', 'arman_chron@hotmail.com', 'hashed_password7'),
('dimitris', 'dimitris_chron@hotmail.com', 'hashed_password8'),
('zisis', 'zisis_chron@hotmail.com', 'hashed_password9'),
('kostas', 'kostas_chron@hotmail.com', 'hashed_password10')";
   $result5 = mysqli_query($connection3, $sql4);
   $sql_prepare2 = "INSERT INTO users(username, email, password) VALUES (?,?,?)";
    $statement2 = mysqli_prepare($connection3, $sql_prepare2);
    if($statement2)
    {
    $username3 = "zois";
   $email = "zois_chron@hotmail.com";
   $password = "hashed_password11";
    mysqli_stmt_bind_param($statement2, "sss", $username3, $email, $password);
    $result8 = mysqli_stmt_execute($statement2);
    echo "<br><br>Insertion was successfull!";
    mysqli_stmt_close($statement2);
    }
    else
    {
    echo "<br><br>Error : " . mysqli_connect_error();    
    }
    if($result5 && $result8)
    {
        echo "<br><br>Data inserted!";
    }
    else
    {
        echo "<br><br>Error : " . mysqli_connect_error();
    }
    $sql_prepare3 = "DELETE FROM users WHERE username = ?";
    $statement3 = mysqli_prepare($connection3, $sql_prepare3);
    if($statement3)
    {
   $username4 = "panos"; 
    mysqli_stmt_bind_param($statement3, "s", $username4);
    $result9 = mysqli_stmt_execute($statement3);
    echo "<br><br>Delete was successfull!";
    mysqli_stmt_close($statement3);
    }
    else
    {
    echo "<br><br>Error : " . mysqli_connect_error();    
    }
     $sql_prepare4 = "UPDATE users SET reg_date = ?  WHERE username = ?";
    $statement4 = mysqli_prepare($connection3, $sql_prepare4);
    if($statement4)
    {
   $username5 = "nikos"; 
   $regdate = date("1997-03-27 15:06:10");
    mysqli_stmt_bind_param($statement4, "ss", $regdate, $username5);
    $result10 = mysqli_stmt_execute($statement4);
    echo "<br><br>Update was successfull!";
    mysqli_stmt_close($statement4);
    }
    else
    {
    echo "<br><br>Error : " . mysqli_connect_error();    
    }
    $sql5 = "SELECT * FROM users WHERE 1 = 1 OR username IN ('$username1') ORDER BY id ASC";
    $result6 = mysqli_query($connection3, $sql5);
    if($result6)
    {
    while($row3 = mysqli_fetch_assoc($result6))
    {
    echo "<br><br>";
    print_r($row3["id"] . " - " . $row3["username"] . " - " . $row3["email"] . " - " . $row3["password"] . " - " . $row3["reg_date"]);    
    }
    }
    else
    {
    echo "<br><br>Error : " . mysqli_connect_error();
    }
    echo "<br><br>----------";
     $sql_prepare5 = "SELECT id, username, email FROM users WHERE id = ?";
    $statement5 = mysqli_prepare($connection3, $sql_prepare5);
    if($statement5)
    {
   $user_id = 8;
    mysqli_stmt_bind_param($statement5, "i", $user_id);
    mysqli_stmt_execute($statement5);
    mysqli_stmt_bind_result($statement5, $id, $username, $email);
    if(mysqli_stmt_fetch($statement5))
    {
        echo "<br><br>Id : {$id}, Username : {$username}, Email : {$email}";

    }
    else
    {
        echo "<br><br>No user found!";
    }
    mysqli_stmt_close($statement5);
    }
    else
    {
    echo "<br><br>Error : " . mysqli_connect_error();    
    }
    $sql6 = "DROP DATABASE IF EXISTS prepare_statement_database";
    $result7 = mysqli_query($connection3, $sql6);
    if($result7)
    {
        echo "<br><br>Database dropped!";
    }
    else
    {
        echo "<br><br>Error : " . mysqli_connect_error();
    }
    echo "<br><br>----------";
    ?>
</body>
</html>