<?php

require 'Note.php';
require 'Matiere.php';

echo 'Entrez le libellé de la matière: ';
fscanf(STDIN, '%s', $libelle);
// var_dump($libelle);

$mat1 = new Matiere($libelle);
echo "\nEntrer la valeur de la note: ";
fscanf(STDIN, '%d', $n);

while ($n != 99) {
    try{
    $note1 = new Note($n);
    $mat1->addNote($note1);
    } catch (Exception $erreur) {
        echo $erreur->getMessage();
    } catch (Error $erreur){
        echo 'Note non valide (valeur réelle attendue)';
    }
    echo "\nEntrer la valeur de la note: ";
    fscanf(STDIN, '%d', $n);
    
};

// $note1 = new Note(15);
// $mat1->addNote($note1);
// $note1 = new Note(5);
// $mat1->addNote($note1);
// $note1 = new Note(18);
// $mat1->addNote($note1);
// $note1 = new Note(10);
// $mat1->addNote($note1);
// $note1 = new Note(20);
// $mat1->addNote($note1);

try{
$mat1->resultat();
} catch(DivisionByZeroError $erreur){
    echo 'Tableau vide !!!';
};