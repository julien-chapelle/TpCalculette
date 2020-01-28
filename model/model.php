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

?>
