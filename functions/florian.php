<?php

// namespace florian;

function checkPassword($password) {


    // echo '<button type="button" class="btn btn-outline-secondary">Tester un mot de passe</button>';
    // echo '<div class="modal" tabindex="-1">
    //         <div class="modal-dialog">
    //             <div class="modal-content">
    //             <div class="modal-header">
    //             </div>
    //                 <div class="modal-body">
    //                 <div class="form-floating">
    //     <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    //     <label for="floatingPassword">Password</label>
    // </div>
    //             </div>
    //             <div class="modal-footer">
    //                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
    //                 <button type="button" class="btn btn-primary">Tester</button>
    //             </div>
    //             </div>
    //         </div>
    //         </div>';

    ?>

    <h1 class="text-center">Florian</h1>
    <p class="w-100">Mot de passe : </p>' .$_GET['=' .$password]. ;
    <p class="text-end mb-0">Force du mot de passe</p>
    <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
    </div>';


 <?php 
// <div class="progress">
//   <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
// </div>
// <div class="progress">
//   <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
// </div>
// <div class="progress">
//   <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
// </div>
// <div class="progress">
//   <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
// </div>
// <div class="progress">
//   <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
// </div>



// Validation de la force du mot de passe 
$uppercase =  preg_match ( '@[AZ]@' ,  $password ); 
$lowercase  =  preg_match ( '@[az]@' ,  $password ); 
$number     =  preg_match ( '@[0-9]@' ,  $password ); 
$specialChars  =  preg_match ( '@[^\w]@' ,  $password ); 

if(!$uppercase  || !$lowercase  || !$number  || !$specialChars  || strlen ( $password ) <  12 ) { 
    echo  'Le mot de passe doit comporter au moins 8 caractères et doit inclure au moins une lettre majuscule, un chiffre et un caractère spécial.' ; 
}else{ 
    echo  'Mot de passe fort.' ; 
}

}

checkPassword($password);
