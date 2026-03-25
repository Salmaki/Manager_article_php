<?php
require 'BlogARticle.php';
$article = new BlogArticle("POO en PHP", "Découvrir l'héritage.", "Alice");
echo $article->afficher();
