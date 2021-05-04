<?php

/*
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
*/
$matches = [
 [
  'home_team' => 'Virtus Roma',
  'away_team' => 'Olimpia Milano',
  'score_home' => 100,
  'score_away' => 87
 ],

 [
 'home_team' => 'Los Angeles Lakers',
 'away_team' => 'Oklahoma City Thunder',
 'score_home' => 120,
 'score_away' => 111  
],

];

foreach ( $matches as  $match ) {
    // var_dump($match['home_team'] . ' - ' . $match['away_team'] . '|'  . $match['score_home'] . '-' .$match['score_away']);
    echo $match['home_team'] . ' - ' . $match['away_team'] . ' ' . '|' . ' ' . $match['score_home'] . '-' .$match['score_away'] . '<br>';
}



?>