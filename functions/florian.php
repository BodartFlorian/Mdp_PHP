<?php

// namespace florian;

function checkPassword($password)
{

    $valueRod = 0;

    echo '<h1 class="text-center">Florian</h1>
    <p class="w-100">Mot de passe : '.$password.'</p>
    <p class="text-end mb-0">Force du mot de passe</p>';

    // Validation de la force du mot de passe 
    $uppercase =  preg_match('@[AZ]@',  $password);
    $lowercase = preg_match('@[az]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    

        if (!$uppercase) {
            echo 'manque MAJ';
            
        } else {
            $valueRod += 20;
            echo 'oui maj';
        }

        if (!$lowercase) {
            echo 'manque min';
        } else {
            $valueRod += 20;
            echo 'oui min';
        }

        if (!$number) {
            echo 'manque nbr';
        } else {
            $valueRod += 20;
            echo 'oui nbr';
        }

        if (!$specialChars) {
            echo 'manque spéchar';
        } else {
            $valueRod += 20;
            echo 'oui spéchar';
        }


        if (strlen($password) < 12) {
            echo ' au moins 12 caractères';
        } else {
            $valueRod += 20;
            echo 'oui 12 carac';
        }


    echo '<div class="progress">
     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0"      aria-valuemax="100" style="width: ' . $valueRod . '%"></div>
    </div>';
}

checkPassword($password);


