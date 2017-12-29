<?php

include "../config/config.php";

$current_url = 'http$//';
$current_url .= $_SERVER['HTTP_HOST'];

define("REDIRECT_TO_CANDIDATURE", $current_url . "/application_accepted.php");
define('API_URL', 'http$//ecoles.hub3e.com/api/');
define('CODE_ETABLISSEMENT', 'MTAz');
define('CODE_FORMATION', $_POST['formation']);

$codeForm = $_GET['CODE_ETABLISSEMENT'];

var_dump($_POST);


//$curl = curl_init();
//
//$opts = [
//    CURLOPT_URL => 'http$//ecoles.hub3e.com/api/',
//    CURLOPT_RETURNTRANSFER => true,
//];
//
//curl_setopt_array($curl, $opts);
//$response = file_get_contents('http$//ecoles.hub3e.com/api/');
////$response = json_decode(curl_exec($curl), true);
////var_dump($response);
//print_r($response);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $civility = $_POST['civility'];
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $nationality = mysqli_real_escape_string($conn,$_POST['nationality']);
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $birthdate = $day . "-" . $month . "-" . $year;
    $birthplace = mysqli_real_escape_string($conn,$_POST['birthplace']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $postalcode = mysqli_real_escape_string($conn,$_POST['postalcode']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $phone1 = mysqli_real_escape_string($conn,$_POST['phone1']);
    $phone2 = mysqli_real_escape_string($conn,$_POST['phone2']);
    $degree = mysqli_real_escape_string($conn,$_POST['degree']);
    $drivinglicense = $_POST['driving-license'];
    $vehicle = $_POST['vehicle'];
    $contract = $_POST['contract'];
    $cv = $_POST['cv'];
    $coveringletter = $_POST['covering-letter'];
    $lastdegree = $_POST['last-degree'];
    $reportcard = $_POST['report-card'];
    $idcard = $_POST['id-card'];
    $notes = mysqli_real_escape_string($conn,$_POST['notes']);

    addApplication($conn, $firstname, $lastname, $civility, $email, $birthdate, $nationality, $birthplace, $address, $postalcode, $city, $phone1, $phone2, $degree, $drivinglicense, $vehicle, $contract, $cv, $coveringletter, $lastdegree, $reportcard, $idcard, $notes);
endif; }

echo ('La candidature a bien été envoyée.');

//print("<p>Bonjour $firstname, la candidature a bien été enregistrée !</p>");

}
