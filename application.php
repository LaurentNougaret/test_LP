<?php
$current_url = 'http://';
$current_url .= $_SERVER['HTTP_HOST'];

define("REDIRECT_TO_CANDIDATURE", $current_url . "/application_accepted.php");
define('API_URL', 'http://ecoles.hub3e.com/api/');
define('CODE_ETABLISSEMENT', MTAz);
define('CODE_FORMATION', $_POST['formation']);
//
//$codeForm = $_GET['CODE_ETABLISSEMENT'];
//
//var_dump($_POST);
//$day = $_POST['day'];
//$month = $_POST['month'];
//$year = $_POST['year'];
//
//$birthdate = $day . "-" . $month . "-" . $year;
//
////echo $_POST['firstname'];
//
//if (isset($_FILES['cv']) AND $_FILES['cv']['error'] == 0)
//{
//    // Testons si le fichier n'est pas trop gros
//    if ($_FILES['cv']['size'] <= 3000000)
//    {
//        $datafile = pathinfo($_FILES['cv']['name']);
//        $extension_upload = $datafile['application/pdf'];
//        $extensions_autorisees = array('pdf');
//        if (in_array($extension_upload, $extensions_autorisees))
//        {
//            move_uploaded_file($_FILES['cv']['tmp_name'], 'uploads/' . basename($_FILES['cv']['name']));
//        }
//    }
//}

$curl = curl_init();

$opts = [
    CURLOPT_URL => 'http://ecoles.hub3e.com/api/',
    CURLOPT_RETURNTRANSFER => true,
];

curl_setopt_array($curl, $opts);

$response = json_decode(curl_exec($curl), true);

print_r($response);
