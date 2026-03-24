<?php
class Article {
    public $titre;
    public $contenu;

    public function __construct($titre, $contenu) {
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    public function afficher() {
        return "Titre : " . $this->titre . " - Contenu : " . $this->contenu;
    }
}

$article1 = new Article("Introduction à PHP", "PHP est un langage de script côté serveur.");
$article1->afficher();

echo "<br>";

$article2 = new Article("Programmation orientée objet", "La POO facilite la modularité.");
$article2->afficher();