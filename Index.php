<?php
require('model/model.php');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Calculette Php - Js</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />


</head>

<body>
    <div class="container-fluid p-0 font-weight-bold mt-5">
        <div class="calculatorArea text-center mx-auto p-3 shadow-lg">
            <div>
                <p class="colorText1 my-auto text-left ml-5">
                    CASIO
                </p>
            </div>
            <div class="borderCasio mx-4 py-1 mb-2 pixelFont">
                <div class="borderWindow">
                    <input type="text" name="result" class="m-0 text-right pt-1 pixelFont" value="<?= (isset($_POST['validate']) && !empty($_POST) && $_POST['nb1'] != '' && $_POST['nb2'] != '' && $_POST['operator'] != '') ? "Résultat : " . $result : "" ?>" id="overview" readonly />
                    <input type="text" name="overview" class="m-0 text-right pixelFont" value="<?= (isset($_POST['validate']) && !empty($_POST) && $_POST['nb1'] != '' && $_POST['nb2'] != '' && $_POST['operator'] != '') ? "Calcul : " . $overview : "$errorMessage" ?>" id="overview" readonly />
                    <form action="Index.php" method="POST">
                        <div class="row m-0 my-1 justify-content-center">
                            <div class="col p-0">
                                <input type="text" name="nb1" class="m-0 ml-1 text-center pixelFont" value="" id="nb1" readonly />
                                <input type="text" name="operator" class="m-0 text-center pixelFont" value="" id="operator" readonly />
                                <input type="text" name="nb2" class="m-0 mr-1 text-center pixelFont" value="" id="nb2" readonly />
                            </div>
                        </div>
                </div>
            </div>
            <div>
                <p class="colorText2 text-left ml-5">
                    GRAPHIQUE COULEUR
                    <span class="colorText3 ml-5">
                        CFX-9940GT
                    </span>
                </p>

            </div>
            <div class="borderCasio mx-4 py-4 mt-2">
                <div class="row my-2">
                    <div class="col">
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="7" value="7" />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="8" value="8" />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="9" value="9" />
                        <input type="submit" class="btn razButton shadow buttonSize1" name="raz" value="raz" id="raz" />
                        <input type="button" class="btn razButton shadow buttonSize1" value="AC/on" />
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="4" value="4" />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="5" value="5" />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="6" value="6" />
                        <input type="button" class="btn buttonNumber shadow operator buttonSize1" name="multiply" value="x" />
                        <input type="button" class="btn buttonNumber shadow operator buttonSize1" name="split" value="/" />

                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="1" value="1" />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="2" value="2" />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="3" value="3" />
                        <input type="button" class="btn buttonNumber shadow operator buttonSize1" name="more" value="+" />
                        <input type="button" class="btn buttonNumber shadow operator buttonSize1" name="less" value="-" />

                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="0" value="0" />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" name="dot" value="." />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" value="x10x" />
                        <input type="button" class="btn buttonNumber shadow number buttonSize1" value="(-)" />
                        <input type="submit" class="btn exeButton shadow buttonSize1" name="validate" value="EXE" id="exe" />
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/script/script.js"></script>
</body>

</html>