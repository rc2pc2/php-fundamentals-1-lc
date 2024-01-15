<?php

    // $array = [
    //     'nome' => 'Michelino',
    //     'Giggino',
    //     'Giggetta',
    //     'Giggettina',
    // ];

    // var_dump($array);

    // var_dump(array_flip($array));

    // $keysArray = [
    //     "classe" => 111,
    // ];

    // var_dump($keysArray);

    $words = [
        'parola',
        'spiderman',
        'accaso',
        'paperella',
        'lanciafiamme',
        'vocabolo',
        'natale',
        'telefono',
        'astrubale',
        'sole',
        'mela',
        'gamberetto',
        'cioccolata',
        'caciocavallo',
        'pony',
    ];

    if ( empty($_GET['wordword']) ){
        echo 'Gentilmente, inserisci una parola da cercare e premi ricerca...';
    } elseif ( in_array($_GET['wordword'], $words)) {
        // ? se la parola c'e' scrivo che c'e'
        echo 'La parola e\' stata trovata';
    } else {
        // % altrimenti scrivo che non c'e'
        echo 'La parola non e\' stata trovata';
    }
?>

<div>
    <form action="./index.php" method="GET">

        <label for="word">Inserisci parola</label>
        <input type="text" id="word" name="wordword">

        <button type="submit">Ricerca</button>
    </form>
</div>