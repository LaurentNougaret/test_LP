<?php

/**
 * @return mysqli
 */
function getConnection()
{
    require "../config/config.php";
    $mysqli = new mysqli(HOST, USER, PASSWORD, DBNAME);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die();
    }
    var_dump($mysqli);
//    return $mysqli;
}

/**
 * @param  mysqli $mysqli
 * @param $sql
 * @return mixed
 */
function execSql($mysqli, $sql){
    if (!$result = $mysqli->query($sql)){
        echo "failed to run query : (" . $mysqli->errno . ") " . $mysqli->error;
        die();
    }
    return $result;
}