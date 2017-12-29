<?php
require "../src/bddManager.php";
require "../src/applicationManager.php";

$conn = getConnection();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Déposez votre candidature</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css"
</head>
<body>
<header>
    <img src="images/logo-la-favorite.png" alt="logo-la-favorite" class="fav pull-left">
    <img src="images/logo-CNAM-ARA.png" alt="logo-cnam-ara" class="cnam pull-right">
</header>
<div class="container">
    <h1 class="text-center">Pré-inscription en Licence L3 Gestion des ressources humaines</h1>
    <form action="../pages/application.php" name="application" method="POST" class="col-xs-12" enctype="multipart/form-data">
        <input type="hidden" name="school" value="MTU="/>
        <div class="row">
            <div class="form-group col-xs-4 col-sm-2">
                <label for="civility">Civilité</label>
                <select class="form-control" id="civility">
                    <option>M.</option>
                    <option>Mme.</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
                <label for="firstname">Prénom *</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom" required>
            </div>
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
                <label for="lastname">Nom *</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12">
                <label for="email">Adresse mail *</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Adresse mail" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12">
                <label>Date de naissance *</label>
                <div class="birthdate">
                    <select name="day" class="day col-xs-2 col-sm-offset-2 col-md-2 col-md-offset-1" required>
                        <option value="">Jour</option>
                        <?php for ($day = 1 ; $day <= 31 ; $day++){ ?>
                            <option value="<?php echo $day ?>"><?php echo $day; ?></option><?php }?>
                    </select>
                    <select name="month" class="month col-xs-2 col-xs-offset-2 col-sm-offset-1 col-md-2 col-md-offset-2" required>
                        <option value="">Mois</option>
                        <?php for ($month = 1 ; $month <= 12 ; $month++){ ?>
                            <option value="<?php echo $month ?>"><?php echo $month; ?></option><?php }?>
                    </select>
                    <select name="year" class="year col-xs-2 col-xs-offset-2 col-sm-offset-1 col-md-2 col-md-offset-2" required>
                        <option value="">Année</option>
                        <?php for ($year = 1950 ; $year <= date('Y') ; $year++){ ?>
                            <option value="<?php echo $year ?>"><?php echo $year; ?></option><?php }?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12 col-sm-6">
                <label for="nationality">Nationalité *</label>
                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Nationalité" required>
            </div>
            <div class="form-group col-xs-12 col-sm-6">
                <label for="birthplace">Lieu de naissance *</label>
                <input type="text" class="form-control" name="birthplace" id="birthplace" placeholder="Lieu de naissance" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12 col-md-12">
                <label for="address">Adresse postale*</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Adresse postale" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
                <label for="postalcode">Code Postal *</label>
                <input type="text" class="form-control" name="postalcode" id="postalcode" placeholder="Code Postal" required>
            </div>
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
                <label for="city">Ville *</label>
                <input type="text" class="form-control" id="city" placeholder="Ville" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12 col-sm-6">
                <label for="phone">Téléphone portable *</label>
                <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Téléphone portable" required>
            </div>
            <div class="form-group col-xs-12 col-sm-6">
                <label for="phone">Téléphone fixe *</label>
                <input type="text" class="form-control" name="phone2" id="phone2" placeholder="Téléphone fixe" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12 col-md-12">
                <label for="degree">Bac +2 obtenu ou en préparation *</label>
                <input type="text" class="form-control" name="degree" id="degree" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-check form-check-inline col-xs-12 col-sm-12 license">
                <label class="form-check-label">Permis *</label>
                <input class="form-check-input" type="radio" name="driving-license" id="driving-license1" value="Oui" required> Oui
                <input class="form-check-input" type="radio" name="driving-license" id="driving-license2" value="Non"> Non
                <input class="form-check-input" type="radio" name="driving-license" id="driving-license3" value="En cours"> En cours
            </div>
            <div class="form-check form-check-inline col-xs-12 col-sm-12 vehicle">
                <label class="form-check-label">Véhicule *</label>
                <input class="form-check-input" type="radio" name="vehicle" id="vehicle1" value="Oui" required> Oui
                <input class="form-check-input" type="radio" name="vehicle" id="vehicle2" value="Non"> Non
            </div>
        </div>
        <div class="row">
            <div class="form-check form-check-inline col-xs-12 contract">
                <label class="form-check-label">Avez-vous déjà trouvé une entreprise pour signer votre contrat de professionalisation ? *</label>
                <input class="form-check-input" type="radio" name="contract" id="contract1" value="Oui" required> <label for="oui">Oui</label>
                <input class="form-check-input" type="radio" name="contract" id="contract2" value="Non"> <label for="non">Non</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12 col-sm-10 col-md-10">
                <label>Documents à charger (3Mo max par fichier. Format PDF)</label>
                <div class="row cv">
                    <p class="col-xs-6">- CV</p>
                    <input type="file" id="cv" name="cv" class="col-sm-6" accept="application/pdf">
                </div>
                <div class="row covering-letter">
                    <p class="col-sm-6">- Lettre de motivation à destination des entreprises</p>
                    <input type="file" name="covering-letter" id="covering-letter" class="col-sm-6" accept="application/pdf">
                </div>
                <div class="row last-degree">
                    <p class="col-sm-6">- Dernier diplôme</p>
                    <input type="file" name="last-degree" id="last-degree" class="col-sm-6" accept="application/pdf">
                </div>
                <div class="row report-card">
                    <p class="col-xs-6">- Bulletins / Relevés de notes</p>
                    <input type="file" name="report-card" id="report-card" class="col-sm-6" accept="application/pdf">
                    <a class="col-sm-12" id="plus" href="#"><img src="images/add.png" class="addAutreBulletin"/></a>
                </div>
                <div class="row id-card">
                    <p class="inline-block col-sm-6">- Carte d'identité ou passeport</p>
                    <input type="file" name="id-card" id="id-card" class="inline-block col-sm-6" accept="application/pdf">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="notes">Vos remarques</label>
                <textarea class="form-control col-sm-6" name="notes" id="notes" rows="10" placeholder="Vos remarques"></textarea>
            </div>
        </div>
        <small id="required" class="form-text">Les champs marqués d'un astérisque sont obligatoires.</small>
        <button type="submit" class="btn btn-danger submit center-block">Valider</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/add_report.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
</body>
</html>
