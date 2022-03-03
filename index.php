<?php

require_once __DIR__. "/movies.php";

$film = [
    new Movies("Belfast", 107, "Kenneth Branagh"),
    new Movies("Drive my car", 179, "Ryusuke Hamagichi"),
];



foreach ($film as $pellicola){
    echo "<h3>{$pellicola -> getTitolo()}</h3>"." <span>Durata: {$pellicola -> getDurata()} minuti;</span>"." <span>Regista: {$pellicola -> getRegista()}.</span><br>";

};
    