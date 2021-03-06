<?php

function getConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=ellie", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        return $conn;
    } catch(PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    }
}

function query($sql){
    $connect = getConnection();
    $result = $connect->query($sql);
    return $result;
}
function queryOne($sql){
    $connect = getConnection();
    $stmt = $connect->prepare($sql);
    $stmt -> execute();
    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    return $stmt -> fetch();
}
function execute($sql){
    $connect = getConnection();
    $result = $connect->exec($sql);
    return $result;
}

function executeReturnID($sql)
        {
            $connect=getConnection();
            $connect->exec($sql);
            return $connect->lastInsertId();
        }


?>