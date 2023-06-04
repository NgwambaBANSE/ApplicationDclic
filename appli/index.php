<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleCss/style.css">
</head>

<body>
    <!-- header -->
    <!-- header -->

    <!-- formulaire debut -->
    <div class="mwb-form-main-wrapper">
        <div class="mwb-form-main-container">
            <h1> FORMULAIRE D'ENREGISTREMENT</h1>
            <form action="php/connexion/insertdata.php" method="post">
                <div class="mwb-form-group">
                    <input type="text" class="mwb-form-control" name="nom" placeholder="Votre nom" required>
                    <div class="mwb-form-error">This Field Required*</div>
                </div>


                <div class="mwb-form-group">
                    <input type="text" class="mwb-form-control" name="prenom" placeholder="Votre prénom" required>
                    <div class="mwb-form-error">This Field Required*</div>
                </div>


                <div class="mwb-form-group">
                    <input type="date" class="mwb-form-control" name="dateDeNaissance" placeholder="Date de naissance"
                        required> <br> <br>
                    <div class="mwb-form-error">This Field Required*</div>
                </div>


                <div class="mwb-form-group">
                    <input type="text" class="mwb-form-control" name="vile" placeholder="Ville d'origine" required> <br>
                    <br>
                    <div class="mwb-form-error">This Field Required*</div>
                </div>

                <div class="mwb-form-group">
                    <input type="text" class="mwb-form-control" name="formation" placeholder="Formation de base"
                        required> <br> <br>
                    <div class="mwb-form-error">This Field Required*</div>
                </div>

                <div class="mwb-form-group">
                    <button type="submit" class="mwb-form-submit-btn">Valider</button>
                </div>
            </form>
        </div>
    </div>
    <!-- formulaire fin -->

    <!-- footer -->
    <!-- footer -->

<script src="styleCss/styleApp.js"></script>
</body>

</html>