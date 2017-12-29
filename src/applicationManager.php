
<?php

function addApplication($conn, $firstname, $lastname, $civility, $email, $birthdate, $nationality, $birthplace, $address, $postalcode, $city, $phone1, $phone2, $degree, $drivinglicense, $vehicle, $contract, $cv, $coveringletter, $lastdegree, $reportcard, $idcard, $notes)
{
    $sql = "INSERT INTO user (firstname, lastname, civility, email, birthdate, nationality, birthplace, address, postalcode, city, phone1, phone2, degree, drivinglicense, vehicle, contract, cv, coveringletter, lastdegree, reportcard, idcard, notes) 
            VALUES ('$firstname, $lastname, $civility, $email, $birthdate, $nationality, $birthplace, $address, $postalcode, $city, $phone1, $phone2, $degree, $drivinglicense, $vehicle, $contract, $cv, $coveringletter, $lastdegree, $reportcard, $idcard, $notes');";
    return execSql($conn, $sql);
}
