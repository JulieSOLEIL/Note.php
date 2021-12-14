<?php

require 'Note.php';
require 'Matiere.php';

$mat1 = new Matiere('Php objet');
$note1 = new Note(15);
$mat1->addNote($note1);
$note1 = new Note(5);
$mat1->addNote($note1);
$note1 = new Note(18);
$mat1->addNote($note1);
$note1 = new Note(10);
$mat1->addNote($note1);
$note1 = new Note(20);
$mat1->addNote($note1);


$note1->affiche();