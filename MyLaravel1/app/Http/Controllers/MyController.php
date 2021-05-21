<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//generare nuovo controller (MyController.php)
class Movie
{

    public $movie;
    public $description;
    // definizione del costruttore
    public function __construct($movie, $description = null)
    {
        $this->movie = $movie;

        if ($description == null) {
            $this->description = 'Nessuna descrizione';
        } else {
            $this->description = $description;
        }
    }
    // metodo getString() che restituisca una stringa 
    public function getString()
    {
        return "Movie Title: " . $this->movie . " || Description path: " . $this->description;
    }
}

class OOPController extends Controller
{
    public function movies()
    {

        $movie1 = new Movie("Il favoloso mondo di Amelie", "A Parigi, al n. 15 di Rue Lepic, c'è il caffè Des 2 moulins. è proprio d'angolo: un neon non opprimente, una vetrina illuminata con discrezione,
                             tavolini esterni secondo il gusto francese. Il tutto un po' fuori dal tempo.
                             Potrebbero essere i nostri giorni, potrebbero non esserlo. è in questo luogo che lavora Amélie Poulain,
                             la protagonista de Il favoloso mondo di Amélie, diretto da Jean-Pierre Jeunet, che è diventato nel tempo un vero e proprio cult. ");
                             
        $movie2 = new Movie("La spada nella roccia", "econdo le leggende del ciclo bretone, re Artù scoprì d'essere l'erede legittimo al trono d'Inghilterra quando estrasse senza difficoltà
                             una spada magica piantata nella roccia dal mago Merlino. Questo divertente film della Walt Disney riprende 
                            la favola raccontando con accenti umoristici la giovinezza di Artù.");
        // nessuna descrizione
        $movie3 = new Movie("Io vi troverò");

        $moviesCollection = [$movie1, $movie2, $movie3];
        $movieString = '';
        foreach ($moviesCollection as $singleMovie) {
            $movieString .= $singleMovie->getString() . ' \n ';
        }
        //stampa delle istanze per mezzo di dd()
        dd($movie1, $movie2, $movie3);
        // dd($movieString);
        return view('pages.oopExercise');
    }
}
