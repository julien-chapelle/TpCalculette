<?php

if (isset($_POST['raz'])) {
    header('refresh: 0');
}

if (isset($_POST['validate']) && !empty($_POST) && $_POST['nb1'] != '' && $_POST['nb2'] != '' && $_POST['operator'] != '') {

    $buttonNb1Int = doubleval($_POST['nb1']);
    $buttonNb2Int = doubleval($_POST['nb2']);

    $overview = $_POST['nb1'] . ' ' . $_POST['operator'] . ' ' . $_POST['nb2'];

    if (isset($_POST['operator']) && $_POST['operator'] == '+') {

        $result = $buttonNb1Int + $buttonNb2Int;
    } else if (isset($_POST['operator']) && $_POST['operator'] == '-') {

        $result = $buttonNb1Int - $buttonNb2Int;
    } else if (isset($_POST['operator']) && $_POST['operator'] == '/') {

        $result = $buttonNb1Int / $buttonNb2Int;
    } else if (isset($_POST['operator']) && $_POST['operator'] == 'x') {

        $result = $buttonNb1Int * $buttonNb2Int;
    };
} else {
    $errorMessage = "Saisir une opération";
};

// // ERROR CALCUL
// $regexNb1 = '/^([0-9]{1,})(\.?)([0-9]{1,})$/';
// $regexOperator = '/^(([+]?)|([-]?)|([*]?)|([\/]?))$/';
// $regexNb2 = '/^([0-9]{1,})(\.?)([0-9]{1,})$/';

// if (isset($_POST['nb1'])) {
//     if (!preg_match($regexNb1, $_POST['nb1'])) {
//         $arrayError['nb1'] = 'Erreur de format';
//     };
// };
// if (isset($_POST['operator'])) {
//     if (!preg_match($regexOperator, $_POST['operator'])) {
//         $arrayError['operator'] = 'Uniquement +,-,x,/';
//     };
// };
// if (isset($_POST['nb2'])) {
//     if (!preg_match($regexNb2, $_POST['nb2'])) {
//         $arrayError['nb2'] = 'Erreur de format';
//     };
// };
?>
