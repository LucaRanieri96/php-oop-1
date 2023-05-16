<?php
include __DIR__ . '/models/Movie.php';
include __DIR__ . '/models/Genre.php';

$genre_1 = new Genre('Fantascienza');
$genre_2 = new Genre('Avventura');
$genre_3 = new Genre('Animazione');
$genre_4 = new Genre('Commedia');

$movies = [
  new Movie('Matrix', 'Matrix (The Matrix) è un film di fantascienza del 1999 in stile cyberpunk scritto e diretto dalle sorelle Lana e Lilly Wachowski.','https://www.themoviedb.org/t/p/w600_and_h900_bestv2/5uCQOswAMkOqUZiNzOxvckw59e3.jpg', $genre_1),
  new Movie('Avatar', 'Jake vive felicemente la sua vita insieme a Neytiri ma Pandora nasconde ancora numerosi misteri. Quando una vecchia, familiare minaccia torna ad affacciarsi per terminare quel che era stato iniziato un tempo, Jake dovrà nuovamente collaborare con l\'esercito dei Na\'vi per proteggere il loro incredibile pianeta. In veste di patriarca si ritroverà a dover combattere una dura guerra contro gli umani. Jake e Neytiri saranno pertanto costretti a lasciare la loro casa ed esplorare varie regioni di Pandora...','https://www.themoviedb.org/t/p/w600_and_h900_bestv2/b1UAG3QykMoLxwDgzk1LqsBkkG3.jpg', $genre_2),
  new Movie('Super Mario Bros. Il film ', 'Un idraulico di Brooklyn di nome Mario viaggia attraverso il Regno dei Funghi con una principessa di nome Peach e un fungo antropomorfo di nome Toad per trovare il fratello di Mario, Luigi, e salvare il mondo da uno spietato mostro sputafuoco di nome Bowser.','https://www.themoviedb.org/t/p/w600_and_h900_bestv2/A1H2lnpur1IofI0ufcImcAnSytP.jpg', $genre_3),
  new Movie('Guardiani della Galassia Vol.3 ', 'Peter Quill, ancora provato dalla perdita di Gamora, deve riunire la sua squadra per difendere l\'universo e proteggere uno di loro. Una missione che, se non sarà portata a termine con successo, potrebbe portare alla fine dei Guardiani così come li conosciamo.','https://www.themoviedb.org/t/p/w600_and_h900_bestv2/6feJspTWa6WpH268Vf8uzDzaTl2.jpg', $genre_4),
  new Movie('Demon Slayer', 'Giappone, periodo Taisho. Tanjiro trova la sua famiglia massacrata da un demone mentre sua sorella minore Nezuko, l’unica sopravvissuta, è stata lei stessa trasformata in un demone. Tanjiro decide quindi di diventare un "cacciatore di demoni" per far tornare sua sorella umana e uccidere chi ha massacrato la sua famiglia.','https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xUfRZu2mi8jH6SzQEJGP6tjBuYj.jpg', $genre_3),
  new Movie('Suzume', 'La storia ha come protagonista una ragazza di 17 anni, Suzume, che vive in una tranquilla cittadina del Kyushu. Un giorno incontra un giovane viaggiatore che sta cercando una misteriosa "porta" e decide di seguirlo. Proprio la ragazza scopre l\'esistenza di un vecchio portale tra le rovine delle montagne. La leggenda narra l\'esistenza di diverse porte collegate tra loro in tutto il Giappone e che la chiusura di una di esse porti terribili sciagure.','https://www.themoviedb.org/t/p/w600_and_h900_bestv2/z05lvxEuMZNgf7VwqBs87GTJJPU.jpg', $genre_3),
];