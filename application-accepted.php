<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Récapitulatif de votre candidature</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="web/css/main.css"
</head>
<body>
<h1 class="text-center">Récapitulatif de votre candidature à la Licence L3 Gestion des ressources humaines</h1>
<form class="col-sm-6 justify-content">
    <div class="row">
        <div class="form-group col-xs-4 col-sm-8 col-md-3">
            <label for="civility">Civilité</label>
            <select class="form-control" id="civility">
                <option value="<?php echo htmlspecialchars($_POST['civility']); ?>"></option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-sm-6">
            <label for="firstname">Prénom *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['firstname']); ?>" id="firstname" placeholder="Prénom">
        </div>
        <div class="form-group col-xs-10 col-sm-6">
            <label for="lastname">Nom *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['lastname']); ?>" id="lastname" placeholder="Nom">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-md-10">
            <label for="email">Adresse mail *</label>
            <input type="email" class="form-control" name="<?php echo htmlspecialchars($_POST['email']); ?>" id="email" aria-describedby="emailHelp" placeholder="Adresse mail">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-md-6">
            <label>Date de naissance *</label>
            <div class="col-xs-12 birthdate">
                <select name="day">
                    <option value="">Jour</option>
                        <option value="<?php echo htmlspecialchars($_POST['day']); ?>"></option>
                </select>
                <select name="month">
                    <option value="">Mois</option>
                        <option value="<?php echo htmlspecialchars($_POST['month']); ?>"></option>
                </select>
                <select name="year">
                    <option value="">Année</option>
                        <option value=""<?php echo htmlspecialchars($_POST['year']); ?>"></option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-sm-6">
            <label for="nationality">Nationalité *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['nationality']); ?>" id="nationality" placeholder="Nationalité">
        </div>
        <div class="form-group col-xs-10 col-sm-6">
            <label for="birthplace">Lieu de naissance *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['birthplace']); ?>" id="birthplace" placeholder="Lieu de naissance">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-md-10">
            <label for="address">Adresse postale*</label>
                <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['address']); ?>" id="address" placeholder="Adresse postale">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-md-3">
            <label for="postalcode">Code Postal *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['postalcode']); ?>" id="postalcode" placeholder="Code Postal">
        </div>
        <div class="form-group col-xs-10 col-md-9">
            <label for="city">Ville *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['city']); ?>" id="city" placeholder="Ville">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-md-6">
            <label for="phone">Téléphone portable *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['phone1']); ?>" id="phone1" placeholder="Téléphone portable">
        </div>
        <div class="form-group col-xs-10 col-md-6">
            <label for="phone">Téléphone fixe *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['phone2']); ?>" id="phone2" placeholder="Téléphone fixe">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-md-10">
            <label for="degree">Bac +2 obtenu ou en préparation *</label>
            <input type="text" class="form-control" name="<?php echo htmlspecialchars($_POST['degree']); ?>" id="degree" placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="form-check form-check-inline col-xs-10 col-sm-6">
            <label class="form-check-label">Permis *</label>
            <input class="form-check-input" type="radio" name="driving-license" id="driving-license1" value="<?php echo htmlspecialchars($_POST['driving-license']); ?>">
        </div>
        <div class="form-check form-check-inline col-xs-10 col-sm-6">
            <label class="form-check-label">Véhicule *</label>
            <input class="form-check-input" type="radio" name="vehicle" id="vehicle1" value="<?php echo htmlspecialchars($_POST['vehicle']); ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-check form-check-inline col-xs-10">
            <label class="form-check-label">Avez-vous déjà trouvé une entreprise pour signer votre contrat de professionalisation ? *</label>
            <input class="form-check-input" type="radio" name="contract" id="contract1" value="<?php echo htmlspecialchars($_POST['contract']); ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-10 col-sm-10 col-md-10">
            <label>Documents à charger (3Mo max par fichier. Format PDF)</label>
            <div class="row">
                <p class="col-xs-4 col-sm-6">- CV</p>
                <p><?php echo $_POST['cv']?></p>
            </div>
            <div class="row">
                <p class="col-sm-6">- Lettre de motivation à destination des entreprises</p>
                <p><?php echo $_POST['covering-letter']?></p>
            </div>
            <div class="row">
                <p class="col-sm-6">- Dernier diplôme</p>
                <p><?php echo $_POST['last-degree']?></p>
            </div>
            <div class="row">
                <p class="col-sm-6">- Bulletins / Relevés de notes</p>
                <p><?php echo $_POST['report-card']?></p>
            </div>
            <div class="row">
                <p class="inline-block col-sm-6">- Carte d'identité ou passeport</p>
                <p><?php echo $_POST['id-card']?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="notes">Vos remarques</label>
            <textarea name="<?php echo htmlspecialchars($_POST['notes']); ?>" class="form-control col-sm-6" id="notes" rows="10" placeholder="Vos remarques"></textarea>
        </div>
    </div>
    <small id="required" class="form-text text-muted">Les champs marqués d'un astérisque sont obligatoires.</small>
    <button type="submit" class="btn btn-primary block-center">Envoyez votre candidature</button>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="web/js/add_report.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
</body>
</html>
