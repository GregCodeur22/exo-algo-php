<?php
// $note = readline('quels est votre note');
// if($note >= 10){
//     echo 'bravo vous avec la moyenne';
// }else if ($note < 5){
//     echo 'ce n\'est pas bon du tous';
// }else {
//     echo 'dommage vous y étais presque ';
// }

// $action = readline('action 1 j\'attaque, action 2 je défends action 3 je passe mon tour');

// switch ($action) {
//     case 1:
//         echo 'j\'attaque mon adversaire';
//         break;
//     case 2:
//         echo 'je me defends';
//         break;
//     case 3:
//         echo 'je passe mon tour';
//         break;
//     default:
//         echo 'commande null';

        
// }

// $heure = readline('quelle heure est t-il ?');
// if(($heure > 9 && $heure <= 12) || ($heure > 14 && $heure <= 17)){
//     echo 'le magasin est ouvert';
// }else {
//     echo 'le magazin est fermé';
// }


// for($cpt= 0 ; $cpt <= 10 ; $cpt++){
//     echo "- $cpt \n";
// };

// $eleves = [
//     'cm2' => ['Marc', 'Adrien', 'Loic'],
//     'cm1' => ['Lisa', 'greg']
// ];

// foreach ($eleves as $classe => $listEleves) {
//     echo "la classe de $classe contien : \n";
//     foreach($listEleves as $eleves){
//         echo " - $eleves \n";
//     }
//     echo "\n";
// }

// $note = [];
// $action = null;

// while(true){
//     $action = readline('entrer une note oubien tapez fin ');
//     if($action === 'fin'){
//         break;
//     }
//         else{
//             $note[] = $action;
//         }
// }

// foreach ($note as $notes) {
//     echo "- $notes \n";
// }


$créneaux = [];

while (true) {
    $debut = (int)readline("Heure d'ouverture");
    $fin = (int)readline("heure de fin");
    if($debut >= $fin) {
        echo 'le créneux de peut être enregistrer';
    }else {
        $créneaux[] = [$debut, $fin];
        $action = readline('voulez vous enregistrer un nouveaux créneau (o/n)');
        if($action === 'N') {
            break;
        }
    }
}

$heure = (int)readline("A quel heure voulez vous visiter le magazin ?)");
$créneauTrouvé = false;

foreach ($crénaux as $créneau) {
    if($heure >= $crénau[0] && $heure <= $crénau[1]) {
        $créneauTrouvé = true;
    }
}
if($créneauTrouvé){
    echo 'le magazin sera ouvert';
}else { 
    echo 'désolé le magasin sera fermé';
}
print_r($créneau);