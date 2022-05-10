<?php

// namespace florian;

function checkPassword($password)
{

    $valueRod = 0;

    echo '<h1 class="text-center">Florian</h1>
    <p class="w-100">Mot de passe : ' . $password . '</p>
    <p class="text-end mb-0">Force du mot de passe</p>';

    // Validation de la force du mot de passe 
    $number = preg_match('@[0-9]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $uppercase =  preg_match('@[A-Z]@',  $password);
    $specialChars = preg_match('@[^\w]@', $password);

    // check strenght password & increment
    if (!$number) {
        $displayNumber = '';
    } else {
        $valueRod += 20;
        $displayNumber = 'd-none';
    }

    if (!$lowercase) {
        $displayLower = '';
    } else {
        $valueRod += 20;
        $displayLower = 'd-none';
    }

    if (!$uppercase) {
        $displayUpper = '';
    } else {
        $valueRod += 20;
        $displayUpper = 'd-none';
    }

    if (!$specialChars) {
        $displaySpecialChars = '';
    } else {
        $valueRod += 20;
        $displaySpecialChars = 'd-none';
    }

    if (strlen($password) < 12) {
        $displayLenght = '';
    } else {
        $valueRod += 20;
        $displayLenght = 'd-none';
    }


    // switch color rod with increment
    switch ($valueRod) {
        case 20:
            $colorRod = 'bg-danger';
            break;
        case 40:
            $colorRod = 'bg-warning';
            break;
        case 60:
            $colorRod = 'bg-info';
            break;
        case 80:
            $colorRod = '';
            break;
        case 100:
            $colorRod = 'bg-success';
            $displayContainer = 'd-none';
            $buttonOk = '<a href="http://localhost/index.php" type="button" class="btn btn-success">Success</a>';
            break;
    }


    // strenght rod 
    echo '<div class="progress">
     <div class="progress-bar progress-bar-striped progress-bar-animated ' . $colorRod . '" role="progressbar" aria-valuenow="75" aria-valuemin="0"      aria-valuemax="100" style="width: ' . $valueRod . '%"></div>
    </div>';


    // missing something about password
    echo '<div class="container ' . $displayContainer . '">
            <div class="row align-middle">
                <ul class="list-group col-4">
                    <li class="list-group-item active" aria-current="true">Le mot de passe doit contenir au moins:</li>
                    <li class="list-group-item ' . $displayNumber . '">1 chiffre</li>
                    <li class="list-group-item ' . $displayLower . '">1 minuscule</li>
                    <li class="list-group-item ' . $displayUpper . '">1 majuscule</li>
                    <li class="list-group-item ' . $displaySpecialChars . '">1 caratcère spécial</li>
                    <li class="list-group-item ' . $displayLenght . '">12 caractères</li>
                </ul>
            </div>
        </div>';
    echo $buttonOk;
}

checkPassword($password);
